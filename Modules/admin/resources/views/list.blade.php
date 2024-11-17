@extends('admin::layout.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('admin/assets/demo/build/assets/dropzone-YD3KFMp8.css') }}" />
@endsection
@section('script')
{{--    <link type="modulepreload" href="{{ asset('admin/assets/demo/build/assets/dropzone-796O8KZ3.js')}}" />--}}
{{--    <script type="module" src="{{ asset('admin/assets/demo/build/assets/dropzone-796O8KZ3.js')}}"></script>--}}

{{--<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>--}}
{{--<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />--}}
@endsection
@section('content')
    <div class="content-wrapper">

        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">

            <div class="row g-6 mb-6">
                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="me-1">
                                    <p class="text-heading mb-1">Session</p>
                                    <div class="d-flex align-items-center">
                                        <h4 class="mb-1 me-2">21,459</h4>
                                        <p class="text-success mb-1">(+29%)</p>
                                    </div>
                                    <small class="mb-0">Total Users</small>
                                </div>
                                <div class="avatar">
                                    <div class="avatar-initial bg-label-primary rounded-3">
                                        <div class="ri-group-line ri-26px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="me-1">
                                    <p class="text-heading mb-1">Paid Users</p>
                                    <div class="d-flex align-items-center">
                                        <h4 class="mb-1 me-1">4,567</h4>
                                        <p class="text-success mb-1">(+18%)</p>
                                    </div>
                                    <small class="mb-0">Last week analytics</small>
                                </div>
                                <div class="avatar">
                                    <div class="avatar-initial bg-label-danger rounded-3">
                                        <div class="ri-user-add-line ri-26px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="me-1">
                                    <p class="text-heading mb-1">Active Users</p>
                                    <div class="d-flex align-items-center">
                                        <h4 class="mb-1 me-1">19,860</h4>
                                        <p class="text-danger mb-1">(-14%)</p>
                                    </div>
                                    <small class="mb-0">Last week analytics</small>
                                </div>
                                <div class="avatar">
                                    <div class="avatar-initial bg-label-success rounded-3">
                                        <div class="ri-user-follow-line ri-26px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="me-1">
                                    <p class="text-heading mb-1">Pending Users</p>
                                    <div class="d-flex align-items-center">
                                        <h4 class="mb-1 me-1">237</h4>
                                        <p class="text-success mb-1">(+42%)</p>
                                    </div>
                                    <small class="mb-0">Last week analytics</small>
                                </div>
                                <div class="avatar">
                                    <div class="avatar-initial bg-label-warning rounded-3">
                                        <div class="ri-user-search-line ri-26px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Users List Table -->
            <div class="card">
                <div class="card-header border-bottom">
                    <h5 class="card-title mb-0">Filters</h5>
                    <div class="d-flex justify-content-between align-items-center row gx-5 pt-4 gap-5 gap-md-0">
                        <div class="col-md-4 user_role"><select id="UserRole" class="form-select text-capitalize">
                                <option value=""> Select Role</option>
                                <option value="Admin">Admin</option>
                                <option value="Author">Author</option>
                                <option value="Editor">Editor</option>
                                <option value="Maintainer">Maintainer</option>
                                <option value="Subscriber">Subscriber</option>
                            </select></div>
                        <div class="col-md-4 user_plan"><select id="UserPlan" class="form-select text-capitalize">
                                <option value=""> Select Plan</option>
                                <option value="Basic">Basic</option>
                                <option value="Company">Company</option>
                                <option value="Enterprise">Enterprise</option>
                                <option value="Team">Team</option>
                            </select></div>
                        <div class="col-md-4 user_status"><select id="FilterTransaction"
                                                                  class="form-select text-capitalize">
                                <option value=""> Select Status</option>
                                <option value="Pending" class="text-capitalize">Pending</option>
                                <option value="Active" class="text-capitalize">Active</option>
                                <option value="Inactive" class="text-capitalize">Inactive</option>
                            </select></div>
                    </div>
                </div>
                <div class="card-datatable table-responsive">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                        <div class="row">
                            <div
                                class="col-md-2 d-flex align-items-center justify-content-md-start justify-content-center">
                                <div class="dt-action-buttons mt-5 mt-md-0">
                                    <div class="dt-buttons btn-group flex-wrap">
                                        <div class="btn-group">
                                            <button
                                                class="btn btn-secondary buttons-collection dropdown-toggle btn-outline-secondary waves-effect waves-light"
                                                tabindex="0" aria-controls="DataTables_Table_0" type="button"
                                                aria-haspopup="dialog" aria-expanded="false"><span><span
                                                        class="d-flex align-items-center"><i
                                                            class="ri-upload-2-line ri-16px me-2"></i> <span
                                                            class="d-none d-sm-inline-block">Export</span></span> </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="d-flex align-items-center justify-content-md-end justify-content-center">
                                    <div class="me-4">
                                        <div id="DataTables_Table_0_filter" class="dataTables_filter"><label><input
                                                    type="search" class="form-control form-control-sm"
                                                    placeholder="Search User"
                                                    aria-controls="DataTables_Table_0"></label></div>
                                    </div>
                                    <div class="add-new">
                                        <button class="btn btn-primary waves-effect waves-light"
                                                data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddUser"><i
                                                class="ri-add-line me-0 me-sm-1 d-inline-block d-sm-none"></i><span
                                                class="d-none d-sm-inline-block"> Add New User </span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="datatables-users table dataTable no-footer dtr-column" id="DataTables_Table_0"
                               aria-describedby="DataTables_Table_0_info" style="width: 1395px;">
                            <thead>
                            <tr>
                                <th class="control sorting_disabled dtr-hidden" rowspan="1" colspan="1"
                                    style="width: 0px; display: none;" aria-label=""></th>
                                <th class="sorting_disabled dt-checkboxes-cell dt-checkboxes-select-all" rowspan="1"
                                    colspan="1" style="width: 18px;" data-col="1" aria-label=""><input type="checkbox"
                                                                                                       class="form-check-input">
                                </th>
                                <th class="sorting sorting_desc" tabindex="0" aria-controls="DataTables_Table_0"
                                    rowspan="1" colspan="1" style="width: 303px;"
                                    aria-label="User: activate to sort column ascending" aria-sort="descending">User
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 304px;"
                                    aria-label="Email: activate to sort column ascending">Email
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 136px;"
                                    aria-label="Role: activate to sort column ascending">Role
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 95px;"
                                    aria-label="Plan: activate to sort column ascending">Plan
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1"
                                    colspan="1" style="width: 86px;"
                                    aria-label="Status: activate to sort column ascending">Status
                                </th>
                                <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 143px;"
                                    aria-label="Actions">Actions
                                </th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($users as $index => $user)
                                <tr class="{{ $index % 2 === 0 ? 'even' : 'odd' }}">
                                    <td class="  control" style="display: none;" tabindex="0"></td>
                                    <td class="  dt-checkboxes-cell">
                                        <input type="checkbox" class="dt-checkboxes form-check-input">
                                    </td>
                                    <td class="sorting_1">
                                        <div class="d-flex justify-content-start align-items-center user-name">
                                            <div class="avatar-wrapper">
                                                <div class="avatar avatar-sm me-3"><img
                                                        src="{{ asset('storage/' . $user->avatar) }}"
                                                        alt="Avatar" class="rounded-circle"></div>
                                            </div>
                                            <div class="d-flex flex-column"><a
                                                    href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo-3/app/user/view/account"
                                                    class="text-truncate text-heading"><span
                                                        class="fw-medium">{{ $user->name }}</span></a><small>{{ $user->email }}</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span>{{ $user->email }}</span></td>
                                    <td><span class="text-truncate d-flex align-items-center text-heading"><i
                                                class="ri-pie-chart-line ri-22px text-info me-2"></i>Maintainer</span>
                                    </td>
                                    <td><span class="text-heading">Enterprise</span></td>
                                    <td><span class="badge rounded-pill bg-label-success"
                                              text-capitalized="">Active</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-50">
{{--                                            <a href="{{route('admin.users.delete', $user->id)}}"--}}
{{--                                               class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect delete-record"--}}
{{--                                               data-bs-toggle="tooltip"--}}
{{--                                               title="Delete User"><i--}}
{{--                                                    class="ri-delete-bin-7-line ri-20px"></i></a>--}}
                                            <form id="delete-form-{{ $user->id }}" action="{{ route('admin.users.delete', $user->id) }}" method="POST" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>

                                            <a href="javascript:void(0)"
                                               class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect delete-record"
                                               data-bs-toggle="tooltip"
                                               title="Delete User"
                                               onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this user?')) { document.getElementById('delete-form-{{ $user->id }}').submit(); }">
                                                <i class="ri-delete-bin-7-line ri-20px"></i>
                                            </a>

                                            <a
                                                href="{{ route('admin.users.show', $user->id) }}"
                                                class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect"
                                                data-bs-toggle="tooltip" title="Preview"><i
                                                    class="ri-eye-line ri-20px"></i></a>
                                            <button
                                                class="btn btn-sm btn-icon btn-text-secondary rounded-pill waves-effect dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown"><i class="ri-more-2-line ri-20px"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end m-0"><a
                                                    href="https://demos.pixinvent.com/materialize-html-laravel-admin-template/demo-3/app/user/view/account"
                                                    class="dropdown-item"><i
                                                        class="ri-eye-line me-2"></i><span>View</span></a><a
                                                    href="javascript:;" class="dropdown-item"><i
                                                        class="ri-edit-box-line me-2"></i><span>Edit</span></a><a
                                                    href="javascript:;" class="dropdown-item delete-record"><i
                                                        class="ri-delete-bin-7-line me-2"></i><span>Delete</span></a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_info" id="DataTables_Table_0_info" role="status"
                                     aria-live="polite">Showing 1 to 10 of 50 entries
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button page-item previous disabled"
                                            id="DataTables_Table_0_previous"><a aria-controls="DataTables_Table_0"
                                                                                aria-disabled="true" role="link"
                                                                                data-dt-idx="previous" tabindex="-1"
                                                                                class="page-link"><i
                                                    class="ri-arrow-left-s-line"></i></a></li>
                                        <li class="paginate_button page-item active"><a href="#"
                                                                                        aria-controls="DataTables_Table_0"
                                                                                        role="link" aria-current="page"
                                                                                        data-dt-idx="0" tabindex="0"
                                                                                        class="page-link">1</a></li>
                                        <li class="paginate_button page-item "><a href="#"
                                                                                  aria-controls="DataTables_Table_0"
                                                                                  role="link" data-dt-idx="1"
                                                                                  tabindex="0" class="page-link">2</a>
                                        </li>
                                        <li class="paginate_button page-item "><a href="#"
                                                                                  aria-controls="DataTables_Table_0"
                                                                                  role="link" data-dt-idx="2"
                                                                                  tabindex="0" class="page-link">3</a>
                                        </li>
                                        <li class="paginate_button page-item "><a href="#"
                                                                                  aria-controls="DataTables_Table_0"
                                                                                  role="link" data-dt-idx="3"
                                                                                  tabindex="0" class="page-link">4</a>
                                        </li>
                                        <li class="paginate_button page-item "><a href="#"
                                                                                  aria-controls="DataTables_Table_0"
                                                                                  role="link" data-dt-idx="4"
                                                                                  tabindex="0" class="page-link">5</a>
                                        </li>
                                        <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a
                                                href="#" aria-controls="DataTables_Table_0" role="link"
                                                data-dt-idx="next" tabindex="0" class="page-link"><i
                                                    class="ri-arrow-right-s-line"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div style="width: 1%;"></div>
                    </div>
                </div>
                <!-- Offcanvas to add new user -->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddUser"
                     aria-labelledby="offcanvasAddUserLabel">
                    <div class="offcanvas-header border-bottom">
                        <h5 id="offcanvasAddUserLabel" class="offcanvas-title">Add User</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body mx-0 flex-grow-0 h-100">
                        <form method="POST" class="add-new-user pt-0 fv-plugins-bootstrap5 fv-plugins-framework" id="addNewUserForm"
                              novalidate="novalidate" action="{{route('register.store')}}"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="form-floating form-floating-outline mb-5 fv-plugins-icon-container">
                                <input type="text" class="form-control" id="add-user-fullname" placeholder="John Doe"
                                       name="name" aria-label="John Doe">
                                <label for="add-user-fullname">Name</label>
                                <div
                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>
                            <div class="form-floating form-floating-outline mb-5 fv-plugins-icon-container">
                                <input type="text" id="add-user-email" class="form-control"
                                       placeholder="john.doe@example.com" aria-label="john.doe@example.com"
                                       name="email">
                                <label for="add-user-email">Email</label>
                                <div
                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>
                            <div class="form-floating form-floating-outline mb-5 fv-plugins-icon-container">
                                <input type="password" class="form-control" id="add-user-fullname" placeholder="John Doe"
                                       name="password" aria-label="John Doe">
                                <label for="add-user-fullname">Password</label>
                                <div
                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                            </div>
                            <input type="file" name="avatar" >





{{--                            <div class="form-floating form-floating-outline mb-5">--}}
{{--                                <input type="text" id="add-user-contact" class="form-control phone-mask"--}}
{{--                                       placeholder="+1 (609) 988-44-11" aria-label="john.doe@example.com"--}}
{{--                                       name="userContact">--}}
{{--                                <label for="add-user-contact">Contact</label>--}}
{{--                            </div>--}}
{{--                            <div class="form-floating form-floating-outline mb-5">--}}
{{--                                <input type="text" id="add-user-company" class="form-control"--}}
{{--                                       placeholder="Web Developer" aria-label="jdoe1" name="companyName">--}}
{{--                                <label for="add-user-company">Company</label>--}}
{{--                            </div>--}}
{{--                            <div class="form-floating form-floating-outline mb-5 form-floating-select2">--}}
{{--                                <div class="position-relative"><select id="country"--}}
{{--                                                                       class="select2 form-select select2-hidden-accessible"--}}
{{--                                                                       data-select2-id="country" tabindex="-1"--}}
{{--                                                                       aria-hidden="true">--}}
{{--                                        <option value="" data-select2-id="2">Select</option>--}}
{{--                                        <option value="Australia">Australia</option>--}}
{{--                                        <option value="Bangladesh">Bangladesh</option>--}}
{{--                                        <option value="Belarus">Belarus</option>--}}
{{--                                        <option value="Brazil">Brazil</option>--}}
{{--                                        <option value="Canada">Canada</option>--}}
{{--                                        <option value="China">China</option>--}}
{{--                                        <option value="France">France</option>--}}
{{--                                        <option value="Germany">Germany</option>--}}
{{--                                        <option value="India">India</option>--}}
{{--                                        <option value="Indonesia">Indonesia</option>--}}
{{--                                        <option value="Israel">Israel</option>--}}
{{--                                        <option value="Italy">Italy</option>--}}
{{--                                        <option value="Japan">Japan</option>--}}
{{--                                        <option value="Korea">Korea, Republic of</option>--}}
{{--                                        <option value="Mexico">Mexico</option>--}}
{{--                                        <option value="Philippines">Philippines</option>--}}
{{--                                        <option value="Russia">Russian Federation</option>--}}
{{--                                        <option value="South Africa">South Africa</option>--}}
{{--                                        <option value="Thailand">Thailand</option>--}}
{{--                                        <option value="Turkey">Turkey</option>--}}
{{--                                        <option value="Ukraine">Ukraine</option>--}}
{{--                                        <option value="United Arab Emirates">United Arab Emirates</option>--}}
{{--                                        <option value="United Kingdom">United Kingdom</option>--}}
{{--                                        <option value="United States">United States</option>--}}
{{--                                    </select><span class="select2 select2-container select2-container--default"--}}
{{--                                                   dir="rtl" data-select2-id="1" style="width: 360px;"><span--}}
{{--                                            class="selection"><span class="select2-selection select2-selection--single"--}}
{{--                                                                    role="combobox" aria-haspopup="true"--}}
{{--                                                                    aria-expanded="false" tabindex="0"--}}
{{--                                                                    aria-disabled="false"--}}
{{--                                                                    aria-labelledby="select2-country-container"><span--}}
{{--                                                    class="select2-selection__rendered" id="select2-country-container"--}}
{{--                                                    role="textbox" aria-readonly="true"><span--}}
{{--                                                        class="select2-selection__placeholder">Select Country</span></span><span--}}
{{--                                                    class="select2-selection__arrow" role="presentation"><b--}}
{{--                                                        role="presentation"></b></span></span></span><span--}}
{{--                                            class="dropdown-wrapper" aria-hidden="true"></span></span></div>--}}
{{--                                <label for="country">Country</label>--}}
{{--                            </div>--}}
{{--                            <div class="form-floating form-floating-outline mb-5">--}}
{{--                                <select id="user-role" class="form-select">--}}
{{--                                    <option value="subscriber">Subscriber</option>--}}
{{--                                    <option value="editor">Editor</option>--}}
{{--                                    <option value="maintainer">Maintainer</option>--}}
{{--                                    <option value="author">Author</option>--}}
{{--                                    <option value="admin">Admin</option>--}}
{{--                                </select>--}}
{{--                                <label for="user-role">User Role</label>--}}
{{--                            </div>--}}
{{--                            <div class="form-floating form-floating-outline mb-5">--}}
{{--                                <select id="user-plan" class="form-select">--}}
{{--                                    <option value="basic">Basic</option>--}}
{{--                                    <option value="enterprise">Enterprise</option>--}}
{{--                                    <option value="company">Company</option>--}}
{{--                                    <option value="team">Team</option>--}}
{{--                                </select>--}}
{{--                                <label for="user-plan">Select Plan</label>--}}
{{--                            </div>--}}
                            <button type="submit"
                                    class="btn btn-primary me-sm-3 me-1 data-submit waves-effect waves-light">Register
                            </button>
                            <button type="reset" class="btn btn-outline-secondary waves-effect"
                                    data-bs-dismiss="offcanvas">Cancel
                            </button>
                            <input type="hidden"></form>




                        <div class="card mb-6">
                            <h5 class="card-header">Basic</h5>
                            <div class="card-body">
                                <form action="/upload" class="dropzone needsclick dz-clickable" id="dropzone-basic">
                                    <div class="dz-message needsclick">
                                        Drop files here or click to upload
                                        <span class="note needsclick">(This is just a demo dropzone. Selected files are <span class="fw-medium">not</span> actually uploaded.)</span>
                                    </div>

                                </form>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
        <!-- / Content -->

        <!-- Footer -->
        <!-- Footer-->
        <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl">
                <div
                    class="footer-container d-flex align-items-center justify-content-between py-3 flex-md-row flex-column">
                    <div class="mb-2 mb-md-0">
                        ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        , made with <span class="text-danger"><i class="tf-icons mdi mdi-heart"></i></span>
                        by
                        <a href="https://pixinvent.com" target="_blank"
                           class="footer-link fw-medium">Pixinvent</a>
                    </div>
                    <div class="d-none d-lg-inline-block">
                        <a href="https://themeforest.net/licenses/standard" class="footer-link me-4"
                           target="_blank">License</a>
                        <a href="https://1.envato.market/pixinvent_portfolio" target="_blank"
                           class="footer-link me-4">More Themes</a>
                        <a href="https://demos.pixinvent.com/materialize-html-admin-template/documentation/laravel-introduction.html"
                           target="_blank" class="footer-link me-4">Documentation</a>
                        <a href="https://pixinvent.ticksy.com/" target="_blank"
                           class="footer-link d-none d-sm-inline-block">Support</a>
                    </div>
                </div>
            </div>
        </footer>
        <!--/ Footer-->
        <!-- / Footer -->
        <div class="content-backdrop fade"></div>
    </div>
@endsection
