@extends('admin::layout.app')

@section('content')
    <div class="content-wrapper">

        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">

            <div class="row gy-6 gy-md-0">
                <!-- User Sidebar -->
                <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
                    <!-- User Card -->
                    <div class="card mb-6">
                        <div class="card-body pt-12">
                            <div class="user-avatar-section">
                                <div class=" d-flex align-items-center flex-column">
                                    <img class="img-fluid rounded-3 mb-4" src="{{ asset('storage/' . $user->avatar) }}" height="120" width="120" alt="User avatar" />
                                    <div class="user-info text-center">
                                        <h5>{{ $user->name }}</h5>
                                        <span class="badge bg-label-danger rounded-pill">Subscriber</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-around flex-wrap my-6 gap-0 gap-md-3 gap-lg-4">
                                <div class="d-flex align-items-center me-5 gap-4">
                                    <div class="avatar">
                                        <div class="avatar-initial bg-label-primary rounded-3">
                                            <i class='ri-check-line ri-24px'></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class="mb-0">1.23k</h5>
                                        <span>Task Done</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-4">
                                    <div class="avatar">
                                        <div class="avatar-initial bg-label-primary rounded-3">
                                            <i class='ri-briefcase-line ri-24px'></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h5 class="mb-0">568</h5>
                                        <span>Project Done</span>
                                    </div>
                                </div>
                            </div>
                            <h5 class="pb-4 border-bottom mb-4">Details</h5>
                            <div class="info-container">
                                <ul class="list-unstyled mb-6">
                                    <li class="mb-2">
                                        <span class="fw-medium text-heading me-2">Username:</span>
                                        <span>violet.dev</span>
                                    </li>
                                    <li class="mb-2">
                                        <span class="fw-medium text-heading me-2">Email:</span>
                                        <span>vafgot@vultukir.org</span>
                                    </li>
                                    <li class="mb-2">
                                        <span class="fw-medium text-heading me-2">Status:</span>
                                        <span class="badge bg-label-success rounded-pill">Active</span>
                                    </li>
                                    <li class="mb-2">
                                        <span class="fw-medium text-heading me-2">Role:</span>
                                        <span>Author</span>
                                    </li>
                                    <li class="mb-2">
                                        <span class="fw-medium text-heading me-2">Tax id:</span>
                                        <span>Tax-8965</span>
                                    </li>
                                    <li class="mb-2">
                                        <span class="fw-medium text-heading me-2">Contact:</span>
                                        <span>(123) 456-7890</span>
                                    </li>
                                    <li class="mb-2">
                                        <span class="fw-medium text-heading me-2">Languages:</span>
                                        <span>French</span>
                                    </li>
                                    <li class="mb-2">
                                        <span class="fw-medium text-heading me-2">Country:</span>
                                        <span>England</span>
                                    </li>
                                </ul>
                                <div class="d-flex justify-content-center">
                                    <a href="javascript:;" class="btn btn-primary me-4" data-bs-target="#editUser" data-bs-toggle="modal">Edit</a>
                                    <a href="javascript:;" class="btn btn-outline-danger suspend-user">Suspend</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /User Card -->
                    <!-- Plan Card -->
                    <div class="card mb-6 border border-2 border-primary">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <span class="badge bg-label-primary rounded-pill">Standard</span>
                                <div class="d-flex justify-content-center">
                                    <sup class="h5 pricing-currency mt-5 mb-0 me-1 text-primary">$</sup>
                                    <h1 class="mb-0 text-primary">99</h1>
                                    <sub class="h6 pricing-duration mt-auto mb-3 fw-normal">month</sub>
                                </div>
                            </div>
                            <ul class="list-unstyled g-2 my-6">
                                <li class="mb-2 d-flex align-items-center"><i class="ri-circle-fill text-body ri-10px me-2"></i><span>10 Users</span></li>
                                <li class="mb-2 d-flex align-items-center"><i class="ri-circle-fill text-body ri-10px me-2"></i><span>Up to 10 GB storage</span></li>
                                <li class="mb-2 d-flex align-items-center"><i class="ri-circle-fill text-body ri-10px me-2"></i><span>Basic Support</span></li>
                            </ul>
                            <div class="d-flex justify-content-between align-items-center mb-1 fw-medium text-heading">
                                <span>Days</span>
                                <span>26 of 30 Days</span>
                            </div>
                            <div class="progress mb-1 rounded">
                                <div class="progress-bar rounded" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <small>4 days remaining</small>
                            <div class="d-grid w-100 mt-6">
                                <button class="btn btn-primary" data-bs-target="#upgradePlanModal" data-bs-toggle="modal">Upgrade Plan</button>
                            </div>
                        </div>
                    </div>
                    <!-- /Plan Card -->
                </div>
                <!--/ User Sidebar -->


                <!-- User Content -->
                <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
                    <!-- User Tabs -->
                    <div class="nav-align-top">
                        <ul class="nav nav-pills flex-column flex-md-row mb-6 row-gap-2">
                            <li class="nav-item"><a class="nav-link active" href="javascript:void(0);"><i class="ri-group-line me-2"></i>Account</a></li>
                            <li class="nav-item"><a class="nav-link" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo-3/app/user/view/security"><i class="ri-lock-2-line me-2"></i>Security</a></li>
                            <li class="nav-item"><a class="nav-link" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo-3/app/user/view/billing"><i class="ri-bookmark-line me-2"></i>Billing & Plans</a></li>
                            <li class="nav-item"><a class="nav-link" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo-3/app/user/view/notifications"><i class="ri-notification-4-line me-2"></i>Notifications</a></li>
                            <li class="nav-item"><a class="nav-link" href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo-3/app/user/view/connections"><i class="ri-link-m me-2"></i>Connections</a></li>
                        </ul>
                    </div>
                    <!--/ User Tabs -->

                    <!-- Project table -->
                    <div class="card mb-6">
                        <div class="table-responsive">
                            <table class="table datatable-project table-border-bottom-0">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Project</th>
                                    <th class="text-nowrap">Total Task</th>
                                    <th>Progress</th>
                                    <th>Hours</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <!-- /Project table -->

                    <!-- Activity Timeline -->
                    <div class="card mb-6">
                        <h5 class="card-header">User Activity Timeline</h5>
                        <div class="card-body pt-0">
                            <ul class="timeline mb-0 mt-2">
                                <li class="timeline-item timeline-item-transparent">
                                    <span class="timeline-point timeline-point-primary"></span>
                                    <div class="timeline-event">
                                        <div class="timeline-header mb-3">
                                            <h6 class="mb-0">12 Invoices have been paid</h6>
                                            <small class="text-muted">12 min ago</small>
                                        </div>
                                        <p class="mb-2">
                                            Invoices have been paid to the company
                                        </p>
                                        <div class="d-flex align-items-center mb-1">
                                            <div class="badge bg-lighter rounded-3 mb-1_5">
                                                <img src="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/assets/img/icons/misc/pdf.png" alt="img" width="15" class="me-2">
                                                <span class="h6 mb-0 text-secondary">invoices.pdf</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item timeline-item-transparent">
                                    <span class="timeline-point timeline-point-success"></span>
                                    <div class="timeline-event">
                                        <div class="timeline-header mb-3">
                                            <h6 class="mb-0">Client Meeting</h6>
                                            <small class="text-muted">45 min ago</small>
                                        </div>
                                        <p class="mb-2">
                                            Project meeting with john @10:15am
                                        </p>
                                        <div class="d-flex justify-content-between flex-wrap gap-2 mb-1_5">
                                            <div class="d-flex flex-wrap align-items-center">
                                                <div class="avatar avatar-sm me-2">
                                                    <img src="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/assets/img/avatars/4.png" alt="Avatar" class="rounded-circle" />
                                                </div>
                                                <div>
                                                    <p class="mb-0 small fw-medium">Lester McCarthy (Client)</p>
                                                    <small>CEO of Pixinvent</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-item timeline-item-transparent">
                                    <span class="timeline-point timeline-point-info"></span>
                                    <div class="timeline-event">
                                        <div class="timeline-header mb-3">
                                            <h6 class="mb-0">Create a new project for client</h6>
                                            <small class="text-muted">2 Day Ago</small>
                                        </div>
                                        <p class="mb-2">
                                            6 team members in a project
                                        </p>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap border-top-0 p-0">
                                                <div class="d-flex flex-wrap align-items-center">
                                                    <ul class="list-unstyled users-list d-flex align-items-center avatar-group m-0 me-2">
                                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Vinnie Mostowy" class="avatar pull-up">
                                                            <img class="rounded-circle" src="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/assets/img/avatars/5.png" alt="Avatar" />
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Allen Rieske" class="avatar pull-up">
                                                            <img class="rounded-circle" src="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/assets/img/avatars/12.png" alt="Avatar" />
                                                        </li>
                                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Julee Rossignol" class="avatar pull-up">
                                                            <img class="rounded-circle" src="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo/assets/img/avatars/6.png" alt="Avatar" />
                                                        </li>
                                                        <li class="avatar">
                                                            <span class="avatar-initial rounded-circle pull-up text-heading" data-bs-toggle="tooltip" data-bs-placement="bottom" title="3 more">+3</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /Activity Timeline -->

                    <!-- Invoice table -->
                    <div class="card">
                        <div class="table-responsive mb-4">
                            <table class="table datatable-invoice">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>#</th>
                                    <th>Status</th>
                                    <th>Total</th>
                                    <th>Issued Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                    <!-- /Invoice table -->
                </div>
                <!--/ User Content -->
            </div>

            <!-- Modal -->
            <!-- Edit User Modal -->
            <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                    <div class="modal-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="modal-body p-0">
                            <div class="text-center mb-6">
                                <h4 class="mb-2">Edit User Information</h4>
                                <p class="mb-6">Updating user details will receive a privacy audit.</p>
                            </div>
                            <form method="POST" action="{{ route('admin.users.update', $user->id) }}" id="editUserForm" class="row g-5">
                                @csrf
                                @method('PATCH')
{{--                                <div class="col-12 col-md-6">--}}
{{--                                    <div class="form-floating form-floating-outline">--}}
{{--                                        <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName" class="form-control" value="Oliver" placeholder="Oliver" />--}}
{{--                                        <label for="modalEditUserFirstName">First Name</label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-12 col-md-6">--}}
{{--                                    <div class="form-floating form-floating-outline">--}}
{{--                                        <input type="text" id="modalEditUserLastName" name="modalEditUserLastName" class="form-control" value="Queen" placeholder="Queen" />--}}
{{--                                        <label for="modalEditUserLastName">Last Name</label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="col-12">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" id="modalEditUserName" name="name" class="form-control" value="{{ $user->name }}" placeholder="oliver.queen" />
                                        <label for="name">Name</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" id="modalEditUserEmail" name="email" class="form-control" value="{{ $user->email }}" placeholder="oliverqueen@gmail.com" />
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-floating form-floating-outline">
                                        <input type="password" id="modalEditUserEmail" name="password" class="form-control" placeholder="password" />
                                        <label for="password">Password</label>
                                    </div>
                                </div>

{{--                                <div class="col-12 col-md-6">--}}
{{--                                    <div class="form-floating form-floating-outline">--}}
{{--                                        <select id="modalEditUserStatus" name="modalEditUserStatus" class="form-select" aria-label="Default select example">--}}
{{--                                            <option value="1" selected>Active</option>--}}
{{--                                            <option value="2">Inactive</option>--}}
{{--                                            <option value="3">Suspended</option>--}}
{{--                                        </select>--}}
{{--                                        <label for="modalEditUserStatus">Status</label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-12 col-md-6">--}}
{{--                                    <div class="form-floating form-floating-outline">--}}
{{--                                        <input type="text" id="modalEditTaxID" name="modalEditTaxID" class="form-control modal-edit-tax-id" placeholder="123 456 7890" />--}}
{{--                                        <label for="modalEditTaxID">Tax ID</label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-12 col-md-6">--}}
{{--                                    <div class="input-group input-group-merge">--}}
{{--                                        <span class="input-group-text">US (+1)</span>--}}
{{--                                        <div class="form-floating form-floating-outline">--}}
{{--                                            <input type="text" id="modalEditUserPhone" name="modalEditUserPhone" class="form-control phone-number-mask" value="+1 609 933 4422" placeholder="+1 609 933 4422" />--}}
{{--                                            <label for="modalEditUserPhone">Phone Number</label>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-12 col-md-6">--}}
{{--                                    <div class="form-floating form-floating-outline">--}}
{{--                                        <input id="TagifyLanguageSuggestion" name="TagifyLanguageSuggestion" class="form-control h-auto" placeholder="select language" value="English">--}}
{{--                                        <label for="TagifyLanguageSuggestion">Language</label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-12 col-md-6">--}}
{{--                                    <div class="form-floating form-floating-outline">--}}
{{--                                        <select id="modalEditUserCountry" name="modalEditUserCountry" class="select2 form-select" data-allow-clear="true">--}}
{{--                                            <option value="">Select</option>--}}
{{--                                            <option value="Australia">Australia</option>--}}
{{--                                            <option value="Bangladesh">Bangladesh</option>--}}
{{--                                            <option value="Belarus">Belarus</option>--}}
{{--                                            <option value="Brazil">Brazil</option>--}}
{{--                                            <option value="Canada">Canada</option>--}}
{{--                                            <option value="China">China</option>--}}
{{--                                            <option value="France">France</option>--}}
{{--                                            <option value="Germany">Germany</option>--}}
{{--                                            <option value="India" selected>India</option>--}}
{{--                                            <option value="Indonesia">Indonesia</option>--}}
{{--                                            <option value="Israel">Israel</option>--}}
{{--                                            <option value="Italy">Italy</option>--}}
{{--                                            <option value="Japan">Japan</option>--}}
{{--                                            <option value="Korea">Korea, Republic of</option>--}}
{{--                                            <option value="Mexico">Mexico</option>--}}
{{--                                            <option value="Philippines">Philippines</option>--}}
{{--                                            <option value="Russia">Russian Federation</option>--}}
{{--                                            <option value="South Africa">South Africa</option>--}}
{{--                                            <option value="Thailand">Thailand</option>--}}
{{--                                            <option value="Turkey">Turkey</option>--}}
{{--                                            <option value="Ukraine">Ukraine</option>--}}
{{--                                            <option value="United Arab Emirates">United Arab Emirates</option>--}}
{{--                                            <option value="United Kingdom">United Kingdom</option>--}}
{{--                                            <option value="United States">United States</option>--}}
{{--                                        </select>--}}
{{--                                        <label for="modalEditUserCountry">Country</label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-12">--}}
{{--                                    <div class="form-check form-switch">--}}
{{--                                        <input type="checkbox" class="form-check-input" id="editBillingAddress" />--}}
{{--                                        <label for="editBillingAddress" class="text-heading">Use as a billing address?</label>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

                                <div class="col-12 text-center d-flex flex-wrap justify-content-center gap-4 row-gap-4">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Edit User Modal -->
            <!-- Upgrade Plan -->
            <div class="modal fade" id="upgradePlanModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-simple modal-upgrade-plan">
                    <div class="modal-content p-8 p-md-12">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="modal-body pt-md-0 px-0">
                            <div class="text-center mb-6">
                                <h4 class="mb-2">Upgrade Plan</h4>
                                <p class="mb-10">Choose the best plan for user.</p>
                            </div>
                            <form id="upgradePlanForm" class="row g-4 d-flex align-items-center" onsubmit="return false">
                                <div class="col-sm-9">
                                    <select id="choosePlan" name="choosePlan" class="form-select form-select-sm" aria-label="Choose Plan">
                                        <option selected>Choose Plan</option>
                                        <option value="standard">Standard - $99/month</option>
                                        <option value="exclusive">Exclusive - $249/month</option>
                                        <option value="Enterprise">Enterprise - $499/month</option>
                                    </select>
                                </div>
                                <div class="col-sm-3 d-flex align-items-end">
                                    <button type="submit" class="btn btn-primary">Upgrade</button>
                                </div>
                            </form>
                        </div>
                        <hr class="my-1">
                        <div class="modal-body pb-md-0 px-0">
                            <p class="mb-1">User current plan is standard plan</p>
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                                <div class="d-flex justify-content-center me-2 mt-4">
                                    <sup class="h5 pricing-currency mt-5 mb-0 me-1 text-primary">$</sup>
                                    <h1 class="mb-0 text-primary">99</h1>
                                    <sub class="h5 pricing-duration mt-auto mb-3 small fw-normal">/month</sub>
                                </div>
                                <button class="btn btn-outline-danger cancel-subscription mt-4">Cancel Subscription</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Upgrade Plan -->
            <!-- /Modal -->

        </div>
        <!-- / Content -->

        <!-- Footer -->
        <!-- Footer -->
        <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl">
                <div class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
                    <div class="text-body mb-2 mb-md-0">
                        © <script>document.write(new Date().getFullYear())</script>,
                        made with <span class="text-danger"><i class="tf-icons ri-heart-fill"></i></span> by
                        <a href="https://pixinvent.com" target="_blank" class="footer-link">Pixinvent</a>
                    </div>
                    <div class="d-none d-lg-inline-block">
                        <a href="https://themeforest.net/licenses/standard" class="footer-link me-4" target="_blank">License</a>
                        <a href="https://1.envato.market/pixinvent_portfolio" target="_blank" class="footer-link me-4">More Themes</a>
                        <a href="https://demos.pixinvent.com/materialize-html-admin-template/documentation/laravel-introduction.html" target="_blank" class="footer-link me-4">Documentation</a>
                        <a href="https://pixinvent.ticksy.com/" target="_blank" class="footer-link d-none d-sm-inline-block">Support</a>
                    </div>
                </div>
            </div>
        </footer>
        <!--/ Footer -->
        <!-- / Footer -->
        <div class="content-backdrop fade"></div>
    </div>
@endsection
