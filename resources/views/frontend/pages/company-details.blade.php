@extends('frontend.layouts.master')

@section('contents')
<section class="section-box">
    <div class="breacrumb-cover">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <h2 class="mb-20">Company Profile</h2>
            <ul class="breadcrumbs">
              <li><a class="home-icon" href="{{ url('/') }}">Home</a></li>
              <li>Company Profile</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-box-2">
    <div class="container">
      <div class="banner-hero banner-image-single"><img style="height: 374px; object-fit: cover;" src="{{ asset($company->banner) }}" alt="joblist"></div>
      <div class="box-company-profile">
        <div class="row mt-10">
          <div class="col-lg-8 col-md-12">
            <div>
                <img style="width: 100px;height: 100px;object-fit: cover;" src="{{ asset($company->logo) }}" alt="">
            </div>
            <h5 class="f-18">{{ $company->name }} <span class="card-location font-regular ml-20">{{ $company->companyCountry->name }}</span></h5>
            <p class="mt-5 font-md color-text-paragraph-2 mb-15">Our Mission to make working life simple</p>
          </div>
          <div class="col-lg-4 col-md-12 text-lg-end"><a class="btn btn-call-icon btn-apply btn-apply-big"
              href="page-contact.html">Contact us</a></div>
        </div>
      </div>
      <div class="box-nav-tabs mt-40 mb-5">
        <ul class="nav" role="tablist">
          <li><a class="btn btn-border  recruitment-icon mr-15 mb-5 active" href="#tab-about" data-bs-toggle="tab"
              role="tab" aria-controls="tab-about" aria-selected="true">About us</a></li>
          <li><a class="btn btn-border recruitment-icon mr-15 mb-5" href="#tab-recruitments" data-bs-toggle="tab"
              role="tab" aria-controls="tab-recruitments" aria-selected="false">Recruitments</a></li>
          <li><a class="btn btn-border  recruitment-icon mb-5" href="#tab-people" data-bs-toggle="tab" role="tab"
              aria-controls="tab-people" aria-selected="false">People</a></li>
        </ul>
      </div>
      <div class="border-bottom pt-10 pb-10"></div>
    </div>
  </section>

  <section class="section-box mt-50">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12 col-sm-12 col-12">
          <div class="content-single">
            <div class="tab-content">
              <div class="tab-pane fade show active" id="tab-about" role="tabpanel" aria-labelledby="tab-about">
                <h4>Welcome to AliStudio Team</h4>
                <p>The AliStudio Design team has a vision to establish a trusted platform that enables productive and
                  healthy enterprises in a world of digital and remote everything, constantly changing work patterns
                  and norms, and the need for organizational resiliency.</p>
                <p>The ideal candidate will have strong creative skills and a portfolio of work which demonstrates
                  their passion for illustrative design and typography. This candidate will have experiences in
                  working with numerous different design platforms such as digital and print forms.</p>
                <h4>Essential Knowledge, Skills, and Experience</h4>
                <ul>
                  <li>A portfolio demonstrating well thought through and polished end to end customer journeys</li>
                  <li>5+ years of industry experience in interactive design and / or visual design</li>
                  <li>Excellent interpersonal skills</li>
                  <li>Aware of trends in mobile, communications, and collaboration</li>
                  <li>Ability to create highly polished design prototypes, mockups, and other communication artifacts
                  </li>
                  <li>The ability to scope and estimate efforts accurately and prioritize tasks and goals
                    independently</li>
                  <li>History of impacting shipping products with your work</li>
                  <li>A Bachelor s Degree in Design (or related field) or equivalent professional experience</li>
                  <li>Proficiency in a variety of design tools such as Figma, Photoshop, Illustrator, and Sketch</li>
                </ul>
              </div>
              <div class="tab-pane fade" id="tab-recruitments" role="tabpanel" aria-labelledby="tab-recruitments">
                <h4>Recruitments</h4>
                <p>The AliStudio Design team has a vision to establish a trusted platform that enables productive and
                  healthy enterprises in a world of digital and remote everything, constantly changing work patterns
                  and norms, and the need for organizational resiliency.</p>
                <p>The ideal candidate will have strong creative skills and a portfolio of work which demonstrates
                  their passion for illustrative design and typography. This candidate will have experiences in
                  working with numerous different design platforms such as digital and print forms.</p>
              </div>
              <div class="tab-pane fade" id="tab-people" role="tabpanel" aria-labelledby="tab-people">
                <h4>People</h4>
                <p>The AliStudio Design team has a vision to establish a trusted platform that enables productive and
                  healthy enterprises in a world of digital and remote everything, constantly changing work patterns
                  and norms, and the need for organizational resiliency.</p>
                <p>The ideal candidate will have strong creative skills and a portfolio of work which demonstrates
                  their passion for illustrative design and typography. This candidate will have experiences in
                  working with numerous different design platforms such as digital and print forms.</p>
              </div>
            </div>
          </div>
          <div class="box-related-job content-page">
            <h5 class="mb-30">Latest Jobs</h5>
            <div class="box-list-jobs display-list">
              <div class="col-xl-12 col-12">
                <div class="card-grid-2 hover-up"><span class="flash"></span>
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="card-grid-2-image-left">
                        <div class="image-box"><img src="assets/imgs/brands/brand-6.png" alt="joblist"></div>
                        <div class="right-info"><a class="name-job" href="">Quora JSC</a><span
                            class="location-small">New York, US</span></div>
                      </div>
                    </div>
                    <div class="col-lg-6 text-start text-md-end pr-60 col-md-6 col-sm-12">
                      <div class="pl-15 mb-15 mt-30"><a class="btn btn-grey-small mr-5" href="#">Adobe XD</a><a
                          class="btn btn-grey-small mr-5" href="#">Figma</a></div>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h4><a href="job-details.html">Senior System Engineer</a></h4>
                    <div class="mt-5"><span class="card-briefcase">Part time</span><span
                        class="card-time"><span>5</span><span> mins ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-10">Lorem ipsum dolor sit amet, consectetur adipisicing
                      elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-lg-7 col-7"><span class="card-text-price">$800</span><span
                            class="text-muted">/Hour</span></div>
                        <div class="col-lg-5 col-5 text-end">
                          <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">
                            Apply now</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-12 col-12">
                <div class="card-grid-2 hover-up"><span class="flash"></span>
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="card-grid-2-image-left">
                        <div class="image-box"><img src="assets/imgs/brands/brand-7.png" alt="joblist"></div>
                        <div class="right-info"><a class="name-job" href="">Nintendo</a><span
                            class="location-small">New York, US</span></div>
                      </div>
                    </div>
                    <div class="col-lg-6 text-start text-md-end pr-60 col-md-6 col-sm-12">
                      <div class="pl-15 mb-15 mt-30"><a class="btn btn-grey-small mr-5" href="#">Adobe XD</a><a
                          class="btn btn-grey-small mr-5" href="#">Figma</a></div>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h4><a href="job-details.html">Products Manager</a></h4>
                    <div class="mt-5"><span class="card-briefcase">Full time</span><span
                        class="card-time"><span>6</span><span> mins ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-10">Lorem ipsum dolor sit amet, consectetur adipisicing
                      elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span
                            class="text-muted">/Hour</span></div>
                        <div class="col-lg-5 col-5 text-end">
                          <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">
                            Apply now</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-12 col-12">
                <div class="card-grid-2 hover-up"><span class="flash"></span>
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                      <div class="card-grid-2-image-left">
                        <div class="image-box"><img src="assets/imgs/brands/brand-8.png" alt="joblist"></div>
                        <div class="right-info"><a class="name-job" href="">Periscope</a><span
                            class="location-small">New York, US</span></div>
                      </div>
                    </div>
                    <div class="col-lg-6 text-start text-md-end pr-60 col-md-6 col-sm-12">
                      <div class="pl-15 mb-15 mt-30"><a class="btn btn-grey-small mr-5" href="#">Adobe XD</a><a
                          class="btn btn-grey-small mr-5" href="#">Figma</a></div>
                    </div>
                  </div>
                  <div class="card-block-info">
                    <h4><a href="job-details.html">Lead Quality Control QA</a></h4>
                    <div class="mt-5"><span class="card-briefcase">Full time</span><span
                        class="card-time"><span>6</span><span> mins ago</span></span></div>
                    <p class="font-sm color-text-paragraph mt-10">Lorem ipsum dolor sit amet, consectetur adipisicing
                      elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                    <div class="card-2-bottom mt-20">
                      <div class="row">
                        <div class="col-lg-7 col-7"><span class="card-text-price">$250</span><span
                            class="text-muted">/Hour</span></div>
                        <div class="col-lg-5 col-5 text-end">
                          <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">
                            Apply now</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="paginations mt-60">
              <ul class="pager">
                <li><a class="pager-prev" href="#"><i class="fas fa-arrow-left"></i></a></li>
                <li><a class="pager-number" href="#">1</a></li>
                <li><a class="pager-number" href="#">2</a></li>
                <li><a class="pager-number active" href="#">3</a></li>
                <li><a class="pager-number" href="#">4</a></li>
                <li><a class="pager-next" href="#"><i class="fas fa-arrow-right"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 col-12 pl-40 pl-lg-15 mt-lg-30">
          <div class="sidebar-border">
            <div class="sidebar-heading">
              <div class="avatar-sidebar">
                <div class="sidebar-info pl-0"><span class="sidebar-company">AliThemes</span><span
                    class="card-location">New York, US</span></div>
              </div>
            </div>
            <div class="sidebar-list-job">
              <div class="box-map">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2970.3150609575905!2d-87.6235655!3d41.886080899999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2ca8b34afe61%3A0x6caeb5f721ca846!2s205%20N%20Michigan%20Ave%20Suit%20810%2C%20Chicago%2C%20IL%2060601%2C%20Hoa%20K%E1%BB%B3!5e0!3m2!1svi!2s!4v1658551322537!5m2!1svi!2s"
                  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
            <div class="sidebar-list-job">
              <ul>
                <li>
                  <div class="sidebar-icon-item"><i class="fi-rr-briefcase"></i></div>
                  <div class="sidebar-text-info"><span class="text-description">Company field</span><strong
                      class="small-heading">Accounting / Finance</strong></div>
                </li>
                <li>
                  <div class="sidebar-icon-item"><i class="fi-rr-marker"></i></div>
                  <div class="sidebar-text-info"><span class="text-description">Location</span><strong
                      class="small-heading">Chicago, US Remote Friendly</strong></div>
                </li>
                <li>
                  <div class="sidebar-icon-item"><i class="fi-rr-dollar"></i></div>
                  <div class="sidebar-text-info"><span class="text-description">Salary</span><strong
                      class="small-heading">$35k - $45k</strong></div>
                </li>
                <li>
                  <div class="sidebar-icon-item"><i class="fi-rr-clock"></i></div>
                  <div class="sidebar-text-info"><span class="text-description">Member since</span><strong
                      class="small-heading">Jul 2012</strong></div>
                </li>
                <li>
                  <div class="sidebar-icon-item"><i class="fi-rr-time-fast"></i></div>
                  <div class="sidebar-text-info"><span class="text-description">Last Jobs Posted</span><strong
                      class="small-heading">4 days</strong></div>
                </li>
              </ul>
            </div>
            <div class="sidebar-list-job">
              <ul class="ul-disc">
                <li>205 North Michigan Avenue, Suite 810 Chicago, 60601, USA</li>
                <li>Phone: (123) 456-7890</li>
                <li>Email: contact@Evara.com</li>
              </ul>
              <div class="mt-30"><a class="btn btn-send-message" href="page-contact.html">Send Message</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
