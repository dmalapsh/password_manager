@extends('layout.app')

@section('content')
    <div class="border-bottom-2 py-32pt position-relative z-1">
        <div
            class="container page__container d-flex flex-column flex-md-row align-items-center text-center text-sm-left">
            <div class="flex d-flex flex-column flex-sm-row align-items-center mb-24pt mb-md-0">

                <div class="mb-24pt mb-sm-0 mr-sm-24pt">
                    <h2 class="mb-0">Analytics</h2>


                    <ol class="breadcrumb p-0 m-0">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>

                        <li class="breadcrumb-item active">

                            Dashboard

                        </li>

                    </ol>

                </div>

                <div class="dropdown">
                    <a href="" class="border rounded d-flex align-items-center p-16pt" data-toggle="dropdown"
                       data-caret="false">

                        <div class="avatar avatar-sm mr-8pt">

                            <span class="avatar-title rounded bg-primary">FM</span>

                        </div>

                        <small class="ml-4pt flex">
                                    <span class="d-flex align-items-center">
                                        <span class="flex d-flex flex-column">
                                            <strong class="text-100">FrontendMatter Inc.</strong>
                                            <span class="text-50">Select company</span>
                                        </span>
                                        <i class="material-icons icon-16pt text-50 ml-4pt">arrow_drop_down</i>
                                    </span>
                        </small>
                    </a>
                    <div class="dropdown-menu w-100">
                        <div class="dropdown-header"><strong>Select company</strong></div>
                        <a href="" class="dropdown-item active d-flex align-items-center">

                            <div class="avatar avatar-sm mr-8pt">

                                <span class="avatar-title rounded bg-primary">FM</span>

                            </div>

                            <small class="ml-4pt flex">
                                        <span class="d-flex flex-column">
                                            <strong class="text-black-100">FrontendMatter Inc.</strong>
                                            <span class="text-black-50">Administrator</span>
                                        </span>
                            </small>
                        </a>
                        <a href="" class="dropdown-item d-flex align-items-center">

                            <div class="avatar avatar-sm mr-8pt">

                                <span class="avatar-title rounded bg-accent">HH</span>

                            </div>

                            <small class="ml-4pt flex">
                                        <span class="d-flex flex-column">
                                            <strong class="text-black-100">HumaHuma Inc.</strong>
                                            <span class="text-black-50">Publisher</span>
                                        </span>
                            </small>
                        </a>
                    </div>
                </div>
            </div>


            <div class="row" role="tablist">
                <div class="col-auto d-flex flex-column">
                    <h6 class="m-0">&dollar;12.3k</h6>
                    <p class="text-50 mb-0 d-flex align-items-center">
                        Earnings
                        <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i>
                    </p>
                </div>
                <div class="col-auto border-left">
                    <h6 class="m-0">264</h6>
                    <p class="text-50 mb-0 d-flex align-items-center">
                        Sales
                        <i class="material-icons text-accent ml-4pt icon-16pt">keyboard_arrow_up</i>
                    </p>
                </div>
                <div class="col-auto border-left">
                    <a href="" class="btn btn-accent">New Report</a>
                </div>
            </div>

        </div>
    </div>

    <div class="container page__container">
        <div class="page-section">

            <div class="page-separator">
                <div class="page-separator__text">Overview</div>
            </div>

            <div class="row mb-lg-8pt">
                <div class="col-md-6 card-group-row__col">

                    <div class="card card-group-row__card">
                        <div class="card-header p-0 nav border-0">
                            <div class="row no-gutters flex" role="tablist">
                                <div class="col-auto">
                                    <div class="p-card-header d-flex align-items-center">
                                        <div class="h2 mb-0 mr-3">2,412</div>
                                        <div class="flex d-flex flex-column">
                                            <p class="mb-0"><strong>Website Visits</strong></p>
                                            <small class="text-50 d-flex align-items-center">Unique Visitors</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto ml-sm-auto">
                                    <div class="p-card-header"><a href="#"><i class="material-icons text-50">more_horiz</i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            {{--                                <div class="chart" style="height: 128px;">--}}
                            {{--                                    <canvas id="viewsChart"--}}
                            {{--                                            class="chart-canvas js-update-chart-line js-update-chart-area"--}}
                            {{--                                            data-chart-points="true" data-chart-line-border-color="primary"--}}
                            {{--                                            data-chart-prefix="$" data-chart-suffix="k"></canvas>--}}
                            {{--                                </div>--}}
                        </div>
                    </div>

                </div>
                <div class="col-md-3 card-group-row__col">

                    <div class="card card-group-row__card card-body"
                         style="position: relative; padding-bottom: calc(80px - 1.25rem); overflow: hidden; z-index: 0;">

                        <div class="d-flex">
                            <div class="flex mr-3">
                                <div class="h2 mb-0">$1,450</div>
                                <div class="d-flex flex-column">
                                    <p class="mb-0"><strong>Product Sales</strong></p>
                                    <small class="text-50">30 transactions</small>
                                </div>
                            </div>
                            <a href="#"><i class="material-icons text-50">more_horiz</i></a>
                        </div>

                        {{--                            <div class="chart" style="height: 100px; position: absolute; left: 0; right: 0; bottom: 0;">--}}
                        {{--                                <canvas class="chart-canvas js-update-chart-line js-update-chart-area"--}}
                        {{--                                        id="productsChart" data-chart-hide-axes="true"--}}
                        {{--                                        data-chart-line-border-color="primary"></canvas>--}}
                        {{--                            </div>--}}
                    </div>

                </div>
                <div class="col-md-3 card-group-row__col">

                    <div class="card card-group-row__card">
                        <div class="card-body">
                            <div class="d-flex mb-16pt">
                                <div class="flex mr-3">
                                    <div class="h2 mb-0">1.24%</div>
                                    <div class="d-flex flex-column">
                                        <p class="mb-0"><strong>Conversion Rate</strong></p>
                                        <small class="text-50">out of 5%</small>
                                    </div>
                                </div>
                                <a href="#"><i class="material-icons text-50">more_horiz</i></a>
                            </div>
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 42%;"
                                     aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column align-items-center justify-content-center">
                            <div>
                                <small class="text-50">From last week</small>
                                <div class="d-flex align-items-center">
                                    <i class="material-icons text-primary mr-4pt">trending_up</i>
                                    <div class="text-70">12%</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row card-group-row mb-lg-8pt">
                <div class="col-md-6 card-group-row__col">

                    <div class="card card-group-row__card">
                        <div class="card-header p-0 nav">
                            <div class="row no-gutters flex" role="tablist">
                                <div class="col-auto">
                                    <div class="p-card-header d-flex align-items-center">
                                        <div class="h2 mb-0 mr-3">417</div>
                                        <div class="flex">
                                            <p class="mb-0"><strong>Orders</strong></p>
                                            <p class="text-50 mb-0 d-flex align-items-center">
                                                <small>This year</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto border-left">
                                    <div class="p-card-header d-flex align-items-center">
                                        <div class="h2 mb-0 mr-3">$67</div>
                                        <div class="flex">
                                            <p class="mb-0"><strong>Average</strong></p>
                                            <p class="text-50 mb-0 d-flex align-items-center">
                                                <small>Order Value</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto ml-sm-auto">
                                    <div class="p-card-header"><a href="#"><i class="material-icons text-50">more_horiz</i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="legend" class="chart-legend mt-0 mb-24pt justify-content-start"></div>
                            {{--                                <div class="chart" style="height: 182px;">--}}
                            {{--                                    <canvas id="earningsChart" class="chart-canvas js-update-chart-bar"--}}
                            {{--                                            data-chart-legend="#legend" data-chart-line-background-color="primary,gray"--}}
                            {{--                                            data-chart-prefix="$" data-chart-suffix="k">--}}
                            {{--                                        <span--}}
                            {{--                                            style="font-size: 1rem;"><strong>Views</strong> area chart goes here.</span>--}}
                            {{--                                    </canvas>--}}
                            {{--                                </div>--}}
                        </div>
                    </div>

                </div>
                <div class="col-md-6 card-group-row__col">

                    <div class="card card-group-row__card">
                        <div class="card-header p-0 nav">
                            <div class="row no-gutters flex" role="tablist">
                                <div class="col-auto">
                                    <div class="p-card-header d-flex align-items-center">
                                        <div class="h2 mb-0 mr-3">103</div>
                                        <div class="flex">
                                            <p class="mb-0"><strong>Alerts</strong></p>
                                            <p class="text-50 mb-0 d-flex align-items-center">
                                                <small>All categories</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto ml-sm-auto">
                                    <div class="p-card-header"><a href="#"><i class="material-icons text-50">more_horiz</i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body d-flex flex-column">

                            <div class="alert alert-soft-warning">
                                <div class="d-flex flex-wrap align-items-start">
                                    <div class="mr-8pt">
                                        <i class="material-icons">error_outline</i>
                                    </div>
                                    <div class="flex" style="min-width: 180px">
                                        <small class="text-100">
                                            <strong>Something's up!</strong> There were 98 alerts over your average.
                                        </small>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex flex flex-column align-items-center justify-content-center">
                                <ul class="list-unstyled list-skills w-100">
                                    <li class="mb-8pt">
                                        <div class="text-50 border-right"><small>Site Offline</small></div>
                                        <div class="flex">
                                            <div class="progress" style="height: 4px;">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                     style="width: 40%;" aria-valuenow="40" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="text-70"><small>+60</small></div>
                                    </li>
                                    <li class="mb-8pt">
                                        <div class="text-50 border-right"><small>Total DDoS Attacks</small></div>
                                        <div class="flex">
                                            <div class="progress" style="height: 4px;">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                     style="width: 50%;" aria-valuenow="50" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="text-70"><small>+6</small></div>
                                    </li>
                                    <li class="mb-8pt">
                                        <div class="text-50 border-right"><small>Attack Mitigations</small></div>
                                        <div class="flex">
                                            <div class="progress" style="height: 4px;">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                     style="width: 60%;" aria-valuenow="60" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="text-70"><small>+5</small></div>
                                    </li>
                                    <li class="mb-8pt">
                                        <div class="text-50 border-right"><small>NVRs Offline</small></div>
                                        <div class="flex">
                                            <div class="progress" style="height: 4px;">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                     style="width: 90%;" aria-valuenow="90" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="text-70"><small>+10</small></div>
                                    </li>
                                    <li class="mb-0">
                                        <div class="text-50 border-right"><small>Shutdown</small></div>
                                        <div class="flex">
                                            <div class="progress" style="height: 4px;">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                     style="width: 25%;" aria-valuenow="25" aria-valuemin="0"
                                                     aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                        <div class="text-70"><small>+12</small></div>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-lg-8">

                    <div class="page-separator">
                        <div class="page-separator__text">Projects</div>
                    </div>

                    <div class="card dashboard-area-tabs mb-lg-0">
                        <div class="card-header p-0 nav">
                            <div class="row no-gutters" role="tablist">
                                <div class="col-auto">
                                    <a href="#" data-toggle="tab" role="tab" aria-selected="true"
                                       class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start active">
                                        <span class="h2 mb-0 mr-3">3</span>
                                        <span class="flex d-flex flex-column">
                                                    <strong>Active</strong>
                                                    <small class="text-50">Ongoing Projects</small>
                                                </span>
                                    </a>
                                </div>
                                <div class="col-auto border-left border-right">
                                    <a href="#" data-toggle="tab" role="tab" aria-selected="false"
                                       class="dashboard-area-tabs__tab card-body d-flex flex-row align-items-center justify-content-start">
                                        <span class="h2 mb-0 mr-3">2</span>
                                        <span class="flex d-flex flex-column">
                                                    <strong>Archived</strong>
                                                    <small class="text-50">Past Projects</small>
                                                </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive" data-toggle="lists" data-lists-sort-by="js-lists-values-date"
                             data-lists-sort-desc="true"
                             data-lists-values='["js-lists-values-lead", "js-lists-values-project", "js-lists-values-status", "js-lists-values-budget", "js-lists-values-date"]'>


                            <table class="table mb-0 thead-border-top-0 table-nowrap">
                                <thead>
                                <tr>

                                    <th style="width: 18px;" class="pr-0">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input js-toggle-check-all"
                                                   data-target="#projects" id="customCheckAll">
                                            <label class="custom-control-label" for="customCheckAll"><span
                                                    class="text-hide">Toggle all</span></label>
                                        </div>
                                    </th>


                                    <th style="width: 150px;">
                                        <a href="javascript:void(0)" class="sort"
                                           data-sort="js-lists-values-project">Project</a>
                                    </th>


                                    <th>
                                        <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-lead">Lead
                                            / Team</a>
                                    </th>


                                    <th style="width: 48px;">
                                        <a href="javascript:void(0)" class="sort" data-sort="js-lists-values-date">Due</a>
                                    </th>
                                    <th style="width: 24px;"></th>
                                </tr>
                                </thead>
                                <tbody class="list" id="projects">

                                <tr>

                                    <td class="pr-0">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox"
                                                   class="custom-control-input js-check-selected-row"
                                                   id="customCheck1_1">
                                            <label class="custom-control-label" for="customCheck1_1"><span
                                                    class="text-hide">Check</span></label>
                                        </div>
                                    </td>


                                    <td>

                                        <div class="media flex-nowrap align-items-center"
                                             style="white-space: nowrap;">
                                            <div class="avatar avatar-sm mr-8pt">
                                                <span class="avatar-title rounded bg-primary text-white">SM</span>
                                            </div>
                                            <div class="media-body">
                                                <div class="d-flex flex-column">
                                                    <small class="js-lists-values-project"><strong>Social Media
                                                            API</strong></small>
                                                    <small class="js-lists-values-location text-50">Twitter</small>
                                                </div>
                                            </div>
                                        </div>

                                    </td>


                                    <td>

                                        <div class="media flex-nowrap align-items-center"
                                             style="white-space: nowrap;">
                                            <div class="avatar avatar-32pt mr-8pt">


                                                <span class="avatar-title rounded-circle">BN</span>

                                            </div>
                                            <div class="media-body">


                                                <div class="d-flex align-items-center">
                                                    <div class="flex d-flex flex-column">
                                                        <p class="mb-0"><strong class="js-lists-values-lead">Billy
                                                                Nunez</strong></p>
                                                        <small class="js-lists-values-email text-50">Quality
                                                            Assurance</small>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>

                                    </td>


                                    <td>
                                        <div class="d-flex flex-column">
                                            <small class="js-lists-values-date"><strong>19/02/2019</strong></small>
                                            <small class="text-50">18 days</small>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <a href="" class="text-50"><i class="material-icons">more_vert</i></a>
                                    </td>
                                </tr>

                                <tr>

                                    <td class="pr-0">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox"
                                                   class="custom-control-input js-check-selected-row"
                                                   id="customCheck1_2">
                                            <label class="custom-control-label" for="customCheck1_2"><span
                                                    class="text-hide">Check</span></label>
                                        </div>
                                    </td>


                                    <td>

                                        <div class="media flex-nowrap align-items-center"
                                             style="white-space: nowrap;">
                                            <div class="avatar avatar-sm mr-8pt">
                                                <span class="avatar-title rounded bg-accent text-white">PM</span>
                                            </div>
                                            <div class="media-body">
                                                <div class="d-flex flex-column">
                                                    <small class="js-lists-values-project"><strong>Project
                                                            Management App</strong></small>
                                                    <small class="js-lists-values-location text-50">Github</small>
                                                </div>
                                            </div>
                                        </div>

                                    </td>


                                    <td>

                                        <div class="media flex-nowrap align-items-center"
                                             style="white-space: nowrap;">
                                            <div class="avatar avatar-32pt mr-8pt">


                                                <span class="avatar-title rounded-circle">TP</span>

                                            </div>
                                            <div class="media-body">


                                                <div class="d-flex align-items-center">
                                                    <div class="flex d-flex flex-column">
                                                        <p class="mb-0"><strong class="js-lists-values-lead">Tony
                                                                Parks</strong></p>
                                                        <small class="js-lists-values-email text-50">iOS
                                                            Development</small>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>

                                    </td>


                                    <td>
                                        <div class="d-flex flex-column">
                                            <small class="js-lists-values-date"><strong>18/02/2019</strong></small>
                                            <small class="text-danger">Overdue</small>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <a href="" class="text-50"><i class="material-icons">more_vert</i></a>
                                    </td>
                                </tr>

                                <tr>

                                    <td class="pr-0">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox"
                                                   class="custom-control-input js-check-selected-row"
                                                   id="customCheck1_3">
                                            <label class="custom-control-label" for="customCheck1_3"><span
                                                    class="text-hide">Check</span></label>
                                        </div>
                                    </td>


                                    <td>

                                        <div class="media flex-nowrap align-items-center"
                                             style="white-space: nowrap;">
                                            <div class="avatar avatar-sm mr-8pt">
                                                <span class="avatar-title rounded bg-warning text-white">AD</span>
                                            </div>
                                            <div class="media-body">
                                                <div class="d-flex flex-column">
                                                    <small class="js-lists-values-project"><strong>Advertising
                                                            Platform</strong></small>
                                                    <small class="js-lists-values-location text-50">Facebook</small>
                                                </div>
                                            </div>
                                        </div>

                                    </td>


                                    <td>

                                        <div class="media flex-nowrap align-items-center"
                                             style="white-space: nowrap;">
                                            <div class="avatar avatar-32pt mr-8pt">

                                                <img src="{{asset('theme/images/guy-1.jpg')}}" alt="Avatar"
                                                     class="avatar-img rounded-circle">


                                            </div>
                                            <div class="media-body">


                                                <div class="d-flex align-items-center">
                                                    <div class="flex d-flex flex-column">
                                                        <p class="mb-0"><strong class="js-lists-values-lead">Gilbert
                                                                Barrett</strong></p>
                                                        <small
                                                            class="js-lists-values-email text-50">Marketing</small>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>

                                    </td>


                                    <td>
                                        <div class="d-flex flex-column">
                                            <small class="js-lists-values-date"><strong>17/02/2019</strong></small>
                                            <small class="text-50">15 days</small>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <a href="" class="text-50"><i class="material-icons">more_vert</i></a>
                                    </td>
                                </tr>

                                <tr>

                                    <td class="pr-0">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox"
                                                   class="custom-control-input js-check-selected-row"
                                                   id="customCheck1_4">
                                            <label class="custom-control-label" for="customCheck1_4"><span
                                                    class="text-hide">Check</span></label>
                                        </div>
                                    </td>


                                    <td>

                                        <div class="media flex-nowrap align-items-center"
                                             style="white-space: nowrap;">
                                            <div class="avatar avatar-sm mr-8pt">
                                                <span class="avatar-title rounded bg-light text-black-100">FD</span>
                                            </div>
                                            <div class="media-body">
                                                <div class="d-flex flex-column">
                                                    <small class="js-lists-values-project"><strong>Frontend
                                                            Development</strong></small>
                                                    <small class="js-lists-values-location text-50">Trello</small>
                                                </div>
                                            </div>
                                        </div>

                                    </td>


                                    <td>

                                        <div class="media flex-nowrap align-items-center"
                                             style="white-space: nowrap;">
                                            <div class="avatar avatar-32pt mr-8pt">

                                                <img src="{{asset('theme/images/guy-2.jpg')}}" alt="Avatar"
                                                     class="avatar-img rounded-circle">


                                            </div>
                                            <div class="media-body">


                                                <div class="d-flex align-items-center">
                                                    <div class="flex d-flex flex-column">
                                                        <p class="mb-0"><strong class="js-lists-values-lead">Ollie
                                                                Wallace</strong></p>
                                                        <small class="js-lists-values-email text-50">Design</small>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>

                                    </td>


                                    <td>
                                        <div class="d-flex flex-column">
                                            <small class="js-lists-values-date"><strong>16/02/2019</strong></small>
                                            <small class="text-50">15 days</small>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <a href="" class="text-50"><i class="material-icons">more_vert</i></a>
                                    </td>
                                </tr>

                                <tr class="selected">

                                    <td class="pr-0">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox"
                                                   class="custom-control-input js-check-selected-row" checked=""
                                                   id="customCheck1_5">
                                            <label class="custom-control-label" for="customCheck1_5"><span
                                                    class="text-hide">Check</span></label>
                                        </div>
                                    </td>


                                    <td>

                                        <div class="media flex-nowrap align-items-center"
                                             style="white-space: nowrap;">
                                            <div class="avatar avatar-sm mr-8pt">
                                                <span class="avatar-title rounded bg-light text-black-100">DU</span>
                                            </div>
                                            <div class="media-body">
                                                <div class="d-flex flex-column">
                                                    <small class="js-lists-values-project"><strong>Database
                                                            Upgrade</strong></small>
                                                    <small class="js-lists-values-location text-50">MySQL</small>
                                                </div>
                                            </div>
                                        </div>

                                    </td>


                                    <td>

                                        <div class="media flex-nowrap align-items-center"
                                             style="white-space: nowrap;">
                                            <div class="avatar avatar-32pt mr-8pt">

                                                <img src="{{asset('theme/images/guy-3.jpg')}}" alt="Avatar"
                                                     class="avatar-img rounded-circle">


                                            </div>
                                            <div class="media-body">


                                                <div class="d-flex align-items-center">
                                                    <div class="flex d-flex flex-column">
                                                        <p class="mb-0"><strong class="js-lists-values-lead">Ricardo
                                                                Bell</strong></p>
                                                        <small class="js-lists-values-email text-50">Web
                                                            Development</small>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>

                                    </td>


                                    <td>
                                        <div class="d-flex flex-column">
                                            <small class="js-lists-values-date"><strong>01/12/2018</strong></small>
                                            <small class="text-50">1 day</small>
                                        </div>
                                    </td>
                                    <td class="text-right">
                                        <a href="" class="text-50"><i class="material-icons">more_vert</i></a>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>

                        <div class="card-footer p-8pt">

                            <ul class="pagination justify-content-start pagination-xsm m-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true" class="material-icons">chevron_left</span>
                                        <span>Prev</span>
                                    </a>
                                </li>
                                <li class="page-item dropdown">
                                    <a class="page-link dropdown-toggle" data-toggle="dropdown" href="#"
                                       aria-label="Page">
                                        <span>1</span>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a href="" class="dropdown-item active">1</a>
                                        <a href="" class="dropdown-item">2</a>
                                        <a href="" class="dropdown-item">3</a>
                                        <a href="" class="dropdown-item">4</a>
                                        <a href="" class="dropdown-item">5</a>
                                    </div>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span>Next</span>
                                        <span aria-hidden="true" class="material-icons">chevron_right</span>
                                    </a>
                                </li>
                            </ul>

                        </div>
                        <!-- <div class="card-body bordet-top text-right">
15 <span class="text-50">of 1,430</span> <a href="#" class="text-50"><i class="material-icons ml-1">arrow_forward</i></a>
</div> -->


                    </div>

                </div>
                <div class="col-lg-4">

                    <div class="page-separator">
                        <div class="page-separator__text">Tasks</div>
                    </div>


                    <div class="card mb-lg-0">
                        <div class="card-header d-flex align-items-center">
                            <strong class="flex">Tasks</strong>
                            <div><a href="#">View all</a></div>
                        </div>
                        <div class="progress rounded-0" style="height: 4px;">
                            <div class="progress-bar bg-accent" role="progressbar" style="width: 40%;"
                                 aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="list-group list-group-flush">


                            <div class="list-group-item p-16pt">


                                <div class="d-flex">
                                    <div class="d-flex flex-column flex">
                                        <a href="#" class="mb-8pt"><strong>Add Fluid Layout Featuring A Vertical
                                                Menu With Icons Only</strong></a>
                                        <div class="d-flex align-items-center mb-8pt">

                                            <a href="" class="mr-4pt"><span
                                                    class="indicator-line rounded bg-primary"></span></a>

                                            <a href="" class="mr-4pt"><span
                                                    class="indicator-line rounded bg-accent"></span></a>

                                        </div>
                                    </div>
                                    <a href="#"><i class="material-icons text-50">more_horiz</i></a>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="flex d-flex align-items-center">
                                        <small class="text-50 mr-16pt">Today</small>


                                        <i class="material-icons icon-16pt text-20 mr-4pt">link</i>
                                        <small class="text-50">2</small>

                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-group flex mr-8pt">

                                            <div class="avatar avatar-xs" data-toggle="tooltip" data-placement="top"
                                                 title="Janell D.">
                                                <a href=""><img
                                                        src="{{asset('theme/images/256_luke-porter-261779-unsplash.jpg')}}"
                                                        alt="Avatar" class="avatar-img rounded-circle"></a>
                                            </div>

                                            <div class="avatar avatar-xs" data-toggle="tooltip" data-placement="top"
                                                 title="Janell D.">
                                                <a href=""><img
                                                        src="{{asset('theme/images/256_michael-dam-258165-unsplash.jpg')}}"
                                                        alt="Avatar" class="avatar-img rounded-circle"></a>
                                            </div>

                                            <div class="avatar avatar-xs" data-toggle="tooltip" data-placement="top"
                                                 title="Janell D.">
                                                <a href=""><img
                                                        src="{{asset('theme/images/256_rsz_1andy-lee-642320-unsplash.jpg')}}"
                                                        alt="Avatar" class="avatar-img rounded-circle"></a>
                                            </div>

                                        </div>
                                        <a style="text-decoration: none;"
                                           class="rounded-circle d-flex align-items-center border align-items-center text-50"
                                           href=""><i class="material-icons icon-16pt m-1">add</i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="list-group-item p-16pt">


                                <a href="" class="d-block mb-16pt"><img
                                        src="{{asset('theme/images/256_rsz_1andy-lee-642320-unsplash.jpg')}}"
                                        alt="" style="height: 64px;" class="card-img card-img-cover"></a>


                                <div class="d-flex">
                                    <div class="d-flex flex-column flex">
                                        <a href="#" class="mb-8pt"><strong>Add Layout Options</strong></a>
                                        <div class="d-flex align-items-center mb-8pt">

                                            <a href="" class="mr-4pt"><span
                                                    class="indicator-line rounded bg-primary"></span></a>

                                        </div>
                                    </div>
                                    <a href="#"><i class="material-icons text-50">more_horiz</i></a>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="flex d-flex align-items-center">
                                        <small class="text-50 mr-16pt">Tomorrow</small>


                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-group flex mr-8pt">

                                            <div class="avatar avatar-xs" data-toggle="tooltip" data-placement="top"
                                                 title="Janell D.">
                                                <a href=""><img
                                                        src="{{asset('theme/images/256_rsz_1andy-lee-642320-unsplash.jpg')}}"
                                                        alt="Avatar" class="avatar-img rounded-circle"></a>
                                            </div>

                                            <div class="avatar avatar-xs" data-toggle="tooltip" data-placement="top"
                                                 title="Janell D.">
                                                <a href=""><img
                                                        src="{{asset('theme/images/256_rsz_1andy-lee-642320-unsplash.jpg')}}"
                                                        alt="Avatar" class="avatar-img rounded-circle"></a>
                                            </div>

                                            <div class="avatar avatar-xs" data-toggle="tooltip" data-placement="top"
                                                 title="Janell D.">
                                                <a href=""><img
                                                        src="{{asset('theme/images/256_rsz_1andy-lee-642320-unsplash.jpg')}}"
                                                        alt="Avatar" class="avatar-img rounded-circle"></a>
                                            </div>

                                        </div>
                                        <a style="text-decoration: none;"
                                           class="rounded-circle d-flex align-items-center border align-items-center text-50"
                                           href=""><i class="material-icons icon-16pt m-1">add</i></a>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
