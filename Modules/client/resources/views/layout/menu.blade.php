<div class="col-xl-3 col-lg-4 m-b30">
    <div class="sticky-top">
        <div class="candidate-info">
            <div class="candidate-detail text-center">
                <div class="canditate-des">
                    <a href="javascript:void(0);">
                        <img alt="" src="{{ asset('storage/' . auth()->user()->avatar) }}">
                    </a>
                    <div class="upload-link" title="" data-bs-toggle="tooltip" data-placement="right"
                         data-bs-original-title="update">
                        <input type="file" class="update-flie">
                        <i class="fa fa-camera"></i>
                    </div>
                </div>
                <div class="candidate-title">
                    <div class="">
                        <h4 class="m-b5"><a href="javascript:void(0);">{{ auth()->user()->name }}</a></h4>
                        <p class="m-b0"><a href="javascript:void(0);">Web developer</a></p>
                    </div>
                </div>
            </div>
            <ul>
                <li><a href="jobs-profile.html" class="active">
                        <i class="far fa-user" aria-hidden="true"></i>
                        <span>Profile</span></a></li>
                <li><a href="jobs-my-resume.html">
                        <i class="far fa-file-alt" aria-hidden="true"></i>
                        <span>My Resume</span></a></li>
                <li><a href="jobs-saved-jobs.html">
                        <i class="far fa-heart" aria-hidden="true"></i>
                        <span>Saved Jobs</span></a></li>
                <li><a href="jobs-applied-job.html">
                        <i class="fa fa-briefcase" aria-hidden="true"></i>
                        <span>Applied Jobs</span></a></li>
                <li><a href="jobs-alerts.html">
                        <i class="far fa-bell" aria-hidden="true"></i>
                        <span>Job Alerts</span></a></li>
                <li><a href="jobs-cv-manager.html">
                        <i class="far fa-id-card" aria-hidden="true"></i>
                        <span>CV Manager</span></a></li>
                <li><a href="jobs-change-password.html">
                        <i class="fa fa-key" aria-hidden="true"></i>
                        <span>Change Password</span></a>
                </li>
                <li><a href="{{ route('client.logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt" aria-hidden="true"></i>
                        <span>خروج</span></a>
                </li>

                <form id="logout-form" method="POST" action="{{ route('client.logout') }}"
                      style="display: none;">
                    @csrf
                </form>

            </ul>
        </div>
    </div>
</div>
