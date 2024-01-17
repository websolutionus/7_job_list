@extends('frontend.layouts.master')

@section('contents')
<section class="section-box mt-75">
    <div class="breacrumb-cover">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <h2 class="mb-20">Job Details</h2>
            <ul class="breadcrumbs">
              <li><a class="home-icon" href="index.html">Home</a></li>
              <li>job Detatils</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-box-2">
    <div class="container">
      <div class="banner-hero banner-image-single"><img style="height: 300px;object-fit: cover;" src="{{ asset($job->company->banner) }}" alt="joblist">
      </div>
      <div class="row mt-10">
        <div class="col-lg-8 col-md-12">
          <h3>{{ $job->title }}</h3>
          <div class="mt-0 mb-15">
            <span class="card-briefcase">{{ $job->jobType->name }}</span>
            <span class="card-briefcase">{{ $job->jobExperience?->name }}</span>
            <span class="card-time"><span>{{ $job->created_at->diffForHumans() }}</span></span>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 text-lg-end">
          <div class="btn btn-apply-icon btn-apply btn-apply-big hover-up" data-bs-toggle="modal"
            data-bs-target="#ModalApplyJobForm">Apply now</div>
        </div>
      </div>
      <div class="border-bottom pt-10 pb-10"></div>
    </div>
  </section>

  <section class="section-box mt-50">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12 col-sm-12 col-12">
          <div class="job-overview">
            <h5 class="border-bottom pb-15 mb-30">Employment Information</h5>
            <div class="row">
              <div class="col-md-6 d-flex">
                <div class="sidebar-icon-item"><img src="{{ asset('frontend/assets/imgs/page/job-single/industry.svg') }}" alt="joblist">
                </div>
                <div class="sidebar-text-info ml-10"><span
                    class="text-description industry-icon mb-10">Category</span><strong class="small-heading">
                    {{ $job->category->name }}</strong></div>
              </div>
              <div class="col-md-6 d-flex mt-sm-15">
                <div class="sidebar-icon-item"><img src="{{ asset('frontend/assets/imgs/page/job-single/job-level.svg') }}" alt="joblist">
                </div>
                <div class="sidebar-text-info ml-10"><span class="text-description joblevel-icon mb-10">Job Role</span><strong class="small-heading">{{ $job->jobRole->name }}</strong></div>
              </div>
            </div>
            <div class="row mt-25">
              <div class="col-md-6 d-flex mt-sm-15">
                <div class="sidebar-icon-item"><img src="{{ asset('frontend/assets/imgs/page/job-single/salary.svg') }}" alt="joblist"></div>
                <div class="sidebar-text-info ml-10"><span
                    class="text-description salary-icon mb-10">Salary</span><strong class="small-heading">
                    @if ($job->salary_mode === 'range')
                        {{ $job->min_salary }} - {{ $job->max_salary }} {{ config('settings.site_default_currency') }}
                    @else
                        {{ $job->custom_salary }}
                    @endif
                </strong></div>
              </div>
              <div class="col-md-6 d-flex">
                <div class="sidebar-icon-item"><img src="{{ asset('frontend/assets/imgs/page/job-single/experience.svg') }}" alt="joblist">
                </div>
                <div class="sidebar-text-info ml-10"><span
                    class="text-description experience-icon mb-10">Experience</span><strong class="small-heading">{{ $job->jobExperience?->name }}</strong></div>
              </div>
            </div>
            <div class="row mt-25">
              <div class="col-md-6 d-flex mt-sm-15">
                <div class="sidebar-icon-item"><img src="assets/imgs/page/job-single/job-type.svg" alt="joblist">
                </div>
                <div class="sidebar-text-info ml-10"><span class="text-description jobtype-icon mb-10">Job
                    type</span><strong class="small-heading">Permanent</strong></div>
              </div>
              <div class="col-md-6 d-flex mt-sm-15">
                <div class="sidebar-icon-item"><img src="assets/imgs/page/job-single/deadline.svg" alt="joblist">
                </div>
                <div class="sidebar-text-info ml-10"><span class="text-description mb-10">Deadline</span><strong
                    class="small-heading">10/08/2022</strong></div>
              </div>
            </div>
            <div class="row mt-25">
              <div class="col-md-6 d-flex mt-sm-15">
                <div class="sidebar-icon-item"><img src="assets/imgs/page/job-single/updated.svg" alt="joblist"></div>
                <div class="sidebar-text-info ml-10"><span
                    class="text-description jobtype-icon mb-10">Updated</span><strong
                    class="small-heading">10/07/2022</strong></div>
              </div>
              <div class="col-md-6 d-flex mt-sm-15">
                <div class="sidebar-icon-item"><img src="assets/imgs/page/job-single/location.svg" alt="joblist">
                </div>
                <div class="sidebar-text-info ml-10"><span class="text-description mb-10">Location</span><strong
                    class="small-heading">Dallas, Texas Remote Friendly</strong></div>
              </div>
            </div>
          </div>
          <div class="content-single">
            <h4>Welcome to AliStudio Team</h4>
            <p>The AliStudio Design team has a vision to establish a trusted platform that enables productive and
              healthy enterprises in a world of digital and remote everything, constantly changing work patterns and
              norms, and the need for organizational resiliency.</p>
            <p>
              The ideal candidate will have strong creative skills and a portfolio of work which demonstrates their
              passion for illustrative design and typography. This candidate will have experiences in working with
              numerous different design platforms such as digital
              and print forms.
            </p>
            <h4>Essential Knowledge, Skills, and Experience</h4>
            <ul>
              <li>A portfolio demonstrating well thought through and polished end to end customer journeys</li>
              <li>5+ years of industry experience in interactive design and / or visual design</li>
              <li>Excellent interpersonal skills</li>
              <li>Aware of trends in&#x202F;mobile, communications, and collaboration</li>
              <li>Ability to create highly polished design prototypes, mockups, and other communication artifacts</li>
              <li>The ability to scope and estimate efforts accurately and prioritize tasks and goals independently
              </li>
              <li>History of impacting shipping products with your work</li>
              <li>A Bachelor&rsquo;s Degree in Design (or related field) or equivalent professional experience</li>
              <li>Proficiency in a variety of design tools such as Figma, Photoshop, Illustrator, and Sketch</li>
            </ul>
            <h4>Preferred Experience</h4>
            <ul>
              <li>Designing user experiences for enterprise software / services</li>
              <li>Creating and applying established design principles and interaction patterns</li>
              <li>Aligning or influencing design thinking with teams working in other geographies</li>
            </ul>
            <h4>Product Designer</h4>
            <p><strong>Product knowledge:</strong> Deeply understand the technology and features of the product area
              to which you are assigned.</p>
            <p><strong>Research:</strong> Provide human and business impact and insights for products.</p>
            <p><strong>Deliverables:</strong> Create deliverables for your product area (for example competitive
              analyses, user flows, low fidelity wireframes, high fidelity mockups, prototypes, etc.) that solve real
              user problems through
              the user experience.
            </p>
            <p><strong>Communication:</strong> Communicate the results of UX activities within your product area to
              the design team department, cross-functional partners within your product area, and other interested
              Superformula team
              members using clear language that simplifies complexity.
            </p>
          </div>
          <div class="author-single"><span>AliThemes</span></div>
          <div class="single-apply-jobs">
            <div class="row align-items-center">
              <div class="col-md-5"><a class="btn btn-default mr-15" href="#">Apply now</a><a class="btn btn-border"
                  href="#">Save job</a></div>
              <div class="col-md-7 text-lg-end social-share">
                <h6 class="color-text-paragraph-2 d-inline-block d-baseline mr-10">Share this</h6><a
                  class="mr-5 d-inline-block d-middle" href="#"><img alt="joblist"
                    src="assets/imgs/template/icons/share-fb.svg"></a><a class="mr-5 d-inline-block d-middle"
                  href="#"><img alt="joblist" src="assets/imgs/template/icons/share-tw.svg"></a><a
                  class="mr-5 d-inline-block d-middle" href="#"><img alt="joblist"
                    src="assets/imgs/template/icons/share-red.svg"></a><a class="d-inline-block d-middle"
                  href="#"><img alt="joblist" src="assets/imgs/template/icons/share-whatsapp.svg"></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 col-12 pl-40 pl-lg-15 mt-lg-30">
          <div class="sidebar-border">
            <div class="sidebar-heading">
              <div class="avatar-sidebar">
                <figure><img alt="joblist" src="assets/imgs/page/job-single/avatar.png"></figure>
                <div class="sidebar-info"><span class="sidebar-company">AliThemes</span><span
                    class="card-location">New York, US</span><a class="link-underline mt-15" href="#">02 Open Jobs</a>
                </div>
              </div>
            </div>
            <div class="sidebar-list-job">
              <div class="box-map">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2970.3150609575905!2d-87.6235655!3d41.886080899999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2ca8b34afe61%3A0x6caeb5f721ca846!2s205%20N%20Michigan%20Ave%20Suit%20810%2C%20Chicago%2C%20IL%2060601%2C%20Hoa%20K%E1%BB%B3!5e0!3m2!1svi!2s!4v1658551322537!5m2!1svi!2s"
                  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              <ul class="ul-disc">
                <li>205 North Michigan Avenue, Suite 810 Chicago, 60601, USA</li>
                <li>Phone: (123) 456-7890</li>
                <li>Email: contact@Evara.com</li>
              </ul>
            </div>
          </div>
          <div class="sidebar-border">
            <h6 class="f-18">Similar jobs</h6>
            <div class="sidebar-list-job">
              <ul>
                <li>
                  <div class="card-list-4 wow animate__animated animate__fadeIn hover-up">
                    <div class="image"><a href="job-details.html"><img src="assets/imgs/brands/brand-1.png"
                          alt="joblist"></a></div>
                    <div class="info-text">
                      <h5 class="font-md font-bold color-brand-1"><a href="job-details.html">UI / UX Designer
                          fulltime</a></h5>
                      <div class="mt-0"><span class="card-briefcase">Fulltime</span><span
                          class="card-time"><span>3</span><span> mins ago</span></span></div>
                      <div class="mt-5">
                        <div class="row">
                          <div class="col-6">
                            <h6 class="card-price">$250<span>/Hour</span></h6>
                          </div>
                          <div class="col-6 text-end"><span class="card-briefcase">New York, US</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="card-list-4 wow animate__animated animate__fadeIn hover-up">
                    <div class="image"><a href="job-details.html"><img src="assets/imgs/brands/brand-2.png"
                          alt="joblist"></a></div>
                    <div class="info-text">
                      <h5 class="font-md font-bold color-brand-1"><a href="job-details.html">Java Software
                          Engineer</a></h5>
                      <div class="mt-0"><span class="card-briefcase">Fulltime</span><span
                          class="card-time"><span>5</span><span> mins ago</span></span></div>
                      <div class="mt-5">
                        <div class="row">
                          <div class="col-6">
                            <h6 class="card-price">$500<span>/Hour</span></h6>
                          </div>
                          <div class="col-6 text-end"><span class="card-briefcase">Tokyo, Japan</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="card-list-4 wow animate__animated animate__fadeIn hover-up">
                    <div class="image"><a href="job-details.html"><img src="assets/imgs/brands/brand-3.png"
                          alt="joblist"></a></div>
                    <div class="info-text">
                      <h5 class="font-md font-bold color-brand-1"><a href="job-details.html">Frontend Developer</a>
                      </h5>
                      <div class="mt-0"><span class="card-briefcase">Fulltime</span><span
                          class="card-time"><span>8</span><span> mins ago</span></span></div>
                      <div class="mt-5">
                        <div class="row">
                          <div class="col-6">
                            <h6 class="card-price">$650<span>/Hour</span></h6>
                          </div>
                          <div class="col-6 text-end"><span class="card-briefcase">Hanoi, Vietnam</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="card-list-4 wow animate__animated animate__fadeIn hover-up">
                    <div class="image"><a href="job-details.html"><img src="assets/imgs/brands/brand-4.png"
                          alt="joblist"></a></div>
                    <div class="info-text">
                      <h5 class="font-md font-bold color-brand-1"><a href="job-details.html">Cloud Engineer</a></h5>
                      <div class="mt-0"><span class="card-briefcase">Fulltime</span><span
                          class="card-time"><span>12</span><span> mins ago</span></span></div>
                      <div class="mt-5">
                        <div class="row">
                          <div class="col-6">
                            <h6 class="card-price">$380<span>/Hour</span></h6>
                          </div>
                          <div class="col-6 text-end"><span class="card-briefcase">Losangl, Au</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="card-list-4 wow animate__animated animate__fadeIn hover-up">
                    <div class="image"><a href="job-details.html"><img src="assets/imgs/brands/brand-5.png"
                          alt="joblist"></a></div>
                    <div class="info-text">
                      <h5 class="font-md font-bold color-brand-1"><a href="job-details.html">DevOps Engineer</a></h5>
                      <div class="mt-0"><span class="card-briefcase">Fulltime</span><span
                          class="card-time"><span>34</span><span> mins ago</span></span></div>
                      <div class="mt-5">
                        <div class="row">
                          <div class="col-6">
                            <h6 class="card-price">$140<span>/Hour</span></h6>
                          </div>
                          <div class="col-6 text-end"><span class="card-briefcase">Paris, France</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="card-list-4 wow animate__animated animate__fadeIn hover-up">
                    <div class="image"><a href="job-details.html"><img src="assets/imgs/brands/brand-6.png"
                          alt="joblist"></a></div>
                    <div class="info-text">
                      <h5 class="font-md font-bold color-brand-1"><a href="job-details.html">Figma design UI/UX</a>
                      </h5>
                      <div class="mt-0"><span class="card-briefcase">Fulltime</span><span
                          class="card-time"><span>45</span><span> mins ago</span></span></div>
                      <div class="mt-5">
                        <div class="row">
                          <div class="col-6">
                            <h6 class="card-price">$290<span>/Hour</span></h6>
                          </div>
                          <div class="col-6 text-end"><span class="card-briefcase">New York, US</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="card-list-4 wow animate__animated animate__fadeIn hover-up">
                    <div class="image"><a href="job-details.html"><img src="assets/imgs/brands/brand-7.png"
                          alt="joblist"></a></div>
                    <div class="info-text">
                      <h5 class="font-md font-bold color-brand-1"><a href="job-details.html">Product Manage</a></h5>
                      <div class="mt-0"><span class="card-briefcase">Fulltime</span><span
                          class="card-time"><span>50</span><span> mins ago</span></span></div>
                      <div class="mt-5">
                        <div class="row">
                          <div class="col-6">
                            <h6 class="card-price">$650<span>/Hour</span></h6>
                          </div>
                          <div class="col-6 text-end"><span class="card-briefcase">New York, US</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="card-list-4 wow animate__animated animate__fadeIn hover-up">
                    <div class="image"><a href="job-details.html"><img src="assets/imgs/brands/brand-8.png"
                          alt="joblist"></a></div>
                    <div class="info-text">
                      <h5 class="font-md font-bold color-brand-1"><a href="job-details.html">UI / UX Designer</a></h5>
                      <div class="mt-0"><span class="card-briefcase">Fulltime</span><span
                          class="card-time"><span>58</span><span> mins ago</span></span></div>
                      <div class="mt-5">
                        <div class="row">
                          <div class="col-6">
                            <h6 class="card-price">$270<span>/Hour</span></h6>
                          </div>
                          <div class="col-6 text-end"><span class="card-briefcase">New York, US</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
