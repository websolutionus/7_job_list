<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\CandidateBasicProfileUpdateRequest;
use App\Http\Requests\Frontend\CandidateProfileInfoUpdateRequest;
use App\Models\Candidate;
use App\Models\CandidateLanguage;
use App\Models\CandidateSkill;
use App\Models\Experience;
use App\Models\Language;
use App\Models\Profession;
use App\Models\Skill;
use App\Services\Notify;
use App\Traits\FileUploadTrait;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CandidateProfileController extends Controller
{
    use FileUploadTrait;

    function index() : View {
        $experiences = Experience::all();
        $professions = Profession::all();
        $candidate = Candidate::where('user_id', auth()->user()->id)->first();
        $skills = Skill::all();
        $languages = Language::all();
        return view('frontend.candidate-dashboard.profile.index', compact('candidate', 'experiences', 'professions', 'skills', 'languages'));
    }

    /** update basic info of candidate profile */
    function basicInfoUpdate(CandidateBasicProfileUpdateRequest $request) : RedirectResponse {
        // handle files
        $imagePath = $this->uploadFile($request, 'profile_picture');
        $cvPath = $this->uploadFile($request, 'cv');

        $data = [];
        if(!empty($imagePath)) $data['image'] = $imagePath;
        if(!empty($cvPath)) $data['cv'] = $cvPath;
        $data['full_name'] = $request->full_name;
        $data['title'] = $request->title;
        $data['experience_id'] = $request->experience_level;
        $data['website'] = $request->website;
        $data['birth_date'] = $request->date_of_birth;

        // updating data
        Candidate::updateOrCreate(
            ['user_id' => auth()->user()->id],
            $data
        );

        Notify::updatedNotification();

        return redirect()->back();
    }

    function profileInfoUpdate(CandidateProfileInfoUpdateRequest $request) : RedirectResponse {

        $data = [];
        $data['gender'] = $request->gender;
        $data['marital_status'] = $request->marital_status;
        $data['profession_id'] = $request->profession;
        $data['status'] = $request->availability;
        $data['bio'] = $request->biography;

         // updating data
        Candidate::updateOrCreate(
            ['user_id' => auth()->user()->id],
            $data
        );

        foreach($request->language_you_know as $language) {
            $candidateLang = new CandidateLanguage();
            $candidateLang->candidate_id = auth()->user()->id;
            $candidateLang->language_id = $language;
            $candidateLang->save();
        }

        foreach($request->skill_you_have as $skill) {
            $candidateSkill = new CandidateSkill();
            $candidateSkill->candidate_id = auth()->user()->id;
            $candidateSkill->skill_id = $skill;
            $candidateSkill->save();
        }

        Notify::updatedNotification();

        return redirect()->back();
    }
}
