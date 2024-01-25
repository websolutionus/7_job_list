<section class="section-box futured_jobs mt-20">
    <div class="container">
      <div class="text-center">
        <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">Featured Jobs</h2>
        <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Check out our latest featred job's</p>
        <div class="list-tabs mt-40">
          <ul class="nav nav-tabs" role="tablist">
            @foreach ($featuredCategories as $category)
            <li><a class="{{ $loop->index === 0 ? 'active' : '' }}" id="nav-tab-job-{{ $category->id }}" href="#tab-job-{{ $category->id }}" data-bs-toggle="tab" role="tab"
                aria-controls="tab-job-{{ $category->id }}" aria-selected="true">{{ $category->name }}</a></li>
            @endforeach

          </ul>
        </div>
      </div>
      <div class="mt-70">
        <div class="tab-content" id="myTabContent-1">
            @foreach ($featuredCategories as $category)
            <div class="tab-pane fade show {{ $loop->index === 0 ? 'active' : '' }}" id="tab-job-{{ $category->id }}" role="tabpanel" aria-labelledby="tab-job-{{ $category->id }}">
              <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                  <div class="card-grid-2 hover-up">
                    <div class="card-grid-2-image-left"><span class="flash"></span>
                      <div class="image-box"><img src="assets/imgs/brands/brand-1.png" alt="joblist"></div>
                      <!-- <div class="right-info"><a class="name-job" href="company-details.html">LinkedIn</a><span
                          class="location-small">New York, US</span></div> -->
                    </div>
                    <div class="card-block-info">
                      <h6><a href="job-details.html">UI / UX Designer fulltime</a></h6>
                      <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span>
                            minutes ago</span></span></div>
                      <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                      <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Adobe XD</a><a
                          class="btn btn-grey-small mr-5" href="jobs-grid.html">Figma</a><a
                          class="btn btn-grey-small mr-5" href="jobs-grid.html">Photoshop</a>
                      </div>
                    </div>
                    <span class="card-text-price">$500<b>/Hour</b> </span>
                    <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">
                      Apply now</div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                  <div class="card-grid-2 hover-up">
                    <div class="card-grid-2-image-left"><span class="flash"></span>
                      <div class="image-box"><img src="assets/imgs/brands/brand-2.png" alt="joblist"></div>
                      <!-- <div class="right-info"><a class="name-job" href="company-details.html">Adobe Ilustrator</a><span
                          class="location-small">New York, US</span></div> -->
                    </div>
                    <div class="card-block-info">
                      <h6><a href="job-details.html">Full Stack Engineer</a></h6>
                      <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time">5<span>
                            minutes ago</span></span></div>
                      <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                      <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">React</a><a
                          class="btn btn-grey-small mr-5" href="jobs-grid.html">NodeJS</a>
                      </div>
                      <span class="card-text-price">$500<b>/Hour</b> </span>
                      <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">
                        Apply now</div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                  <div class="card-grid-2 hover-up">
                    <div class="card-grid-2-image-left"><span class="flash"></span>
                      <div class="image-box"><img src="assets/imgs/brands/brand-3.png" alt="joblist"></div>
                      <!-- <div class="right-info"><a class="name-job" href="company-details.html">Bing Search</a><span
                          class="location-small">New York, US</span></div> -->
                    </div>
                    <div class="card-block-info">
                      <h6><a href="job-details.html">Java Software Engineer</a></h6>
                      <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span>
                            minutes ago</span></span></div>
                      <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                      <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Python</a><a
                          class="btn btn-grey-small mr-5" href="jobs-grid.html">AWS</a><a
                          class="btn btn-grey-small mr-5" href="jobs-grid.html">Photoshop</a>
                      </div>
                      <span class="card-text-price">$500<b>/Hour</b> </span>
                      <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">
                        Apply now</div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                  <div class="card-grid-2 hover-up">
                    <div class="card-grid-2-image-left"><span class="flash"></span>
                      <div class="image-box"><img src="assets/imgs/brands/brand-4.png" alt="joblist"></div>
                      <!-- <div class="right-info"><a class="name-job" href="company-details.html">Dailymotion</a><span
                          class="location-small">New York, US</span></div> -->
                    </div>
                    <div class="card-block-info">
                      <h6><a href="job-details.html">Frontend Developer</a></h6>
                      <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span>
                            minutes ago</span></span></div>
                      <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                      <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Typescript</a><a
                          class="btn btn-grey-small mr-5" href="jobs-grid.html">Java</a>
                      </div>
                      <span class="card-text-price">$500<b>/Hour</b> </span>
                      <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">
                        Apply now</div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                  <div class="card-grid-2 hover-up">
                    <div class="card-grid-2-image-left"><span class="flash"></span>
                      <div class="image-box"><img src="assets/imgs/brands/brand-5.png" alt="joblist"></div>
                      <!-- <div class="right-info"><a class="name-job" href="company-details.html">Linkedin</a><span
                          class="location-small">New York, US</span></div> -->
                    </div>
                    <div class="card-block-info">
                      <h6><a href="job-details.html">React Native Web Developer</a></h6>
                      <div class="mt-5"><span class="card-briefcase">Fulltime</span><span class="card-time">4<span>
                            minutes ago</span></span></div>
                      <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Recusandae architecto eveniet, dolor quo repellendus pariatur</p>
                      <div class="mt-30"><a class="btn btn-grey-small mr-5" href="jobs-grid.html">Angular</a>
                      </div>
                      <span class="card-text-price">$500<b>/Hour</b> </span>
                      <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">
                        Apply now</div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                  <div class="card-grid-2 hover-up">
                    <div class="card-grid-2-image-left"><span class="flash"></span>
                      <div class="image-box"><img src="assets/imgs/brands/brand-6.png" alt="joblist"></div>
                      <!-- <div class="right-info"><a class="name-job" href="company-details.html">Quora JSC</a><span
                          class="location-small">New York, US</span></div> -->
                    </div>
                    <div class="card-block-info">
                      <h6><a href="job-details.html">Senior System Engineer</a></h6>
                      <div class="mt-5"><span class="card-briefcase">Part time</span><span class="card-time">5<span>
                            minutes ago</span></span></div>
                      <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                      <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">PHP</a><a
                          class="btn btn-grey-small mr-5" href="job-details.html">Android</a>
                      </div>
                      <span class="card-text-price">$500<b>/Hour</b> </span>
                      <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">
                        Apply now</div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                  <div class="card-grid-2 hover-up">
                    <div class="card-grid-2-image-left"><span class="flash"></span>
                      <div class="image-box"><img src="assets/imgs/brands/brand-7.png" alt="joblist"></div>
                      <!-- <div class="right-info"><a class="name-job" href="company-details.html">Nintendo</a><span
                          class="location-small">New York, US</span></div> -->
                    </div>
                    <div class="card-block-info">
                      <h6><a href="job-details.html">Products Manager</a></h6>
                      <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span>
                            minutes ago</span></span></div>
                      <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                      <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">ASP .Net</a><a
                          class="btn btn-grey-small mr-5" href="job-details.html">Figma</a>
                      </div>
                      <span class="card-text-price">$500<b>/Hour</b> </span>
                      <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">
                        Apply now</div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                  <div class="card-grid-2 hover-up">
                    <div class="card-grid-2-image-left"><span class="flash"></span>
                      <div class="image-box"><img src="assets/imgs/brands/brand-8.png" alt="joblist"></div>
                      <!-- <div class="right-info"><a class="name-job" href="company-details.html">Periscope</a><span
                          class="location-small">New York, US</span></div> -->
                    </div>
                    <div class="card-block-info">
                      <h6><a href="job-details.html">Lead Quality Control QA</a></h6>
                      <div class="mt-5"><span class="card-briefcase">Full time</span><span class="card-time">6<span>
                            minutes ago</span></span></div>
                      <p class="font-sm color-text-paragraph mt-15">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Recusandae architecto eveniet, dolor quo repellendus pariatur.</p>
                      <div class="mt-30"><a class="btn btn-grey-small mr-5" href="job-details.html">iOS</a><a
                          class="btn btn-grey-small mr-5" href="job-details.html">Laravel</a><a
                          class="btn btn-grey-small mr-5" href="job-details.html">Golang</a>
                      </div>
                      <span class="card-text-price">$500<b>/Hour</b> </span>
                      <div class="btn btn-apply-now" data-bs-toggle="modal" data-bs-target="#ModalApplyJobForm">
                        Apply now</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach

        </div>
      </div>
    </div>
  </section>
