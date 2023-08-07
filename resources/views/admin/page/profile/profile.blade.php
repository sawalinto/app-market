@extends('admin.app')

@section('content')


<div class="main-content">
    <div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-12">
                <div class="profile-user"></div>
            </div>
        </div>

        <div class="row">
           <div class="profile-content">
               <div class="row align-items-end">
                    <div class="col-sm">
                        <div class="d-flex align-items-end mt-3 mt-sm-0">
                            <div class="flex-shrink-0">
                                <div class="avatar-xxl me-3">
                                    <img src="{{asset('admin/images/users/avatar-3.jpg')}}" alt="" class="img-fluid rounded-circle d-block img-thumbnail">
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <div>
                                    <h5 class="font-size-16 mb-1">Melinda Rivera</h5>
                                    <p class="text-muted font-size-13 mb-2 pb-2">Full Stack Developer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-auto">
                        <div class="d-flex align-items-start justify-content-end gap-2 mb-2">
                            <div>
                                <button type="button" class="btn btn-success"><i class="me-1"></i> Message</button>
                            </div>
                            <div>
                                <div class="dropdown">
                                    <button class="btn btn-link font-size-16 shadow-none text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bx bx-dots-horizontal-rounded font-size-20"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
           </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
               <div class="card bg-transparent shadow-none">
                   <div class="card-body">
                        <ul class="nav nav-tabs-custom card-header-tabs border-top mt-2" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link px-3 active" data-bs-toggle="tab" href="#overview" role="tab">Overview</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-3" data-bs-toggle="tab" href="#post" role="tab">Post</a>
                            </li>
                        </ul>
                   </div>
               </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-8 col-lg-8">
                <div class="tab-content">
                    <div class="tab-pane active" id="overview" role="tabpanel">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title mb-0">About</h5>
                            </div>

                            <div class="card-body">
                                <div>
                                    <div class="pb-3">
                                        <h5 class="font-size-15">Bio :</h5>
                                        <div class="text-muted">
                                            <p class="mb-2">Hi I'm Phyllis Gatlin, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages</p>
                                            <p class="mb-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at it has a more-or-less normal distribution of letters</p>
                                            <p>It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth.</p>

                                            <ul class="list-unstyled mb-0">
                                                <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Donec vitae sapien ut libero venenatis faucibus</li>
                                                <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Quisque rutrum aenean imperdiet</li>
                                                <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Integer ante a consectetuer eget</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="pt-3">
                                        <h5 class="font-size-15">Experience :</h5>
                                        <div class="text-muted">
                                            <p>If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages. It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc</p>

                                            <ul class="list-unstyled mb-0">
                                                <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Donec vitae sapien ut libero venenatis faucibus</li>
                                                <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Quisque rutrum aenean imperdiet</li>
                                                <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Integer ante a consectetuer eget</li>
                                                <li class="py-1"><i class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Phasellus nec sem in justo pellentesque</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end tab pane -->

                    <div class="tab-pane" id="post" role="tabpanel">
                        <div class="card">
                            <div class="card-body"> 
                                    <div class="blog-post">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-lg me-3">
                                                <img src="assets/images/users/avatar-6.jpg" alt="" class="img-fluid rounded-circle d-block">
                                            </div>
                                            <div class="flex-1">
                                                <h5 class="font-size-15 text-truncate"><a href="#" class="text-dark">Richard Johnson</a></h5>
                                                <p class="font-size-13 text-muted mb-0">24 Mar, 2021</p>
                                            </div>
                                        </div>
                                        <div class="pt-3">
                                            <ul class="list-inline">
                                                <li class="list-inline-item me-3">
                                                    <a href="javascript: void(0);" class="text-muted">
                                                        <i class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i> Development
                                                    </a>
                                                </li>
                                                <li class="list-inline-item me-3">
                                                    <a href="javascript: void(0);" class="text-muted">
                                                        <i class="bx bx-comment-dots align-middle text-muted me-1"></i> 08 Comments
                                                    </a>
                                                </li>
                                            </ul>
                                            <p class="text-muted">Aenean ornare mauris velit. Donec imperdiet, massa sit amet porta maximus, massa justo faucibus nisi,
                                                 eget accumsan nunc ipsum nec lacus. Etiam dignissim turpis sit amet lectus porttitor eleifend. Maecenas ornare molestie metus eget feugiat.
                                                 Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>

                                        </div>
                                        <div class="position-relative mt-3">
                                            <img src="assets/images/profile-bg.jpg" alt="" class="img-thumbnail">
                                        </div>
                                        <div class="pt-3">
                                            <div class="d-flex align-items-center justify-content-between border-bottom pb-3">
                                                <div >
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item me-3">
                                                            <a href="javascript: void(0);" class="text-muted">
                                                                <i class="bx bx-purchase-tag-alt text-muted me-1"></i> Project
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item me-3">
                                                            <a href="javascript: void(0);" class="text-muted">
                                                                <i class="bx bx-like align-middle text-muted me-1"></i> 12 Like
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-group">
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block">
                                                                    <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-sm">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block">
                                                                    <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-sm">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="ms-2" >
                                                            <button type="button" class="btn btn-outline-primary btn-sm waves-effect">Share <i class="bx bx-share-alt align-middle ms-1"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="text-muted mt-4">Praesent fringilla neque vestibulum, consectetur arcu quis, rutrum arcu. Vivamus vitae pulvinar dolor,
                                                    sit amet lacinia dolor. Mauris tincidunt lacinia nisi, non molestie leo consequat a.
                                                    Sed varius lobortis leo, vitae venenatis tortor ullamcorper condimentum.</p>

                                            <div class="mt-4 pt-2">
                                                <h5 class="f-18">2 Comments</h5>
                        
                                                <div class="mt-4 pt-2">
                                                    <div class="comment-section border-bottom pb-4">
                                                        <div class="d-flex">
                                                            <img src="assets/images/users/avatar-2.jpg" class="rounded-circle avatar-md" alt="img-missing">
                                                            <div class="flex-1 ms-4">
                                                                <div class="post-meta float-end">
                                                                    <span><i class="mdi mdi-calendar me-2"></i>Feb 13, 2021</span>
                                                                </div>
                                                                <h5 class="font-size-15">Natasha Andrews</h5>
                                                                <p class="text-muted w-75 mb-0">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                        
                                                    <div class="comment-section pt-4">
                                                        <div class="d-flex">
                                                            <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-md" alt="img-missing">
                                                            <div class="flex-1 ms-4">
                                                                <div class="post-meta float-end">
                                                                    <span><i class="mdi mdi-calendar me-2"></i>Feb 13, 2021</span>
                                                                </div>
                                                                <h5 class="font-size-15">Pranav Gamewala</h5>
                                                                <p class="text-muted w-75">Donec non nisl dui. Integer pellentesque nibh mi, elementum pellentesque purus tincidunt ut. Suspendisse venenatis feugiat elit sed risus ornare laoreet.</p>
                                                                <div class="mt-4">
                                                                    <a href="" class="btn btn-primary btn-sm"><i class="mdi mdi-reply me-1"></i> Reply</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end blog post --> 
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->


                        <div class="card">
                            <div class="card-body"> 
                                    <div class="blog-post">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-lg me-3">
                                                <img src="assets/images/users/avatar-9.jpg" alt="" class="img-fluid rounded-circle d-block">
                                            </div>
                                            <div class="flex-1">
                                                <h5 class="font-size-15 text-truncate"><a href="#" class="text-dark">Michael Smith</a></h5>
                                                <p class="font-size-13 text-muted mb-0">08 Mar, 2021</p>
                                            </div>
                                        </div>
                                        <div class="pt-3">
                                            <ul class="list-inline">
                                                <li class="list-inline-item me-3">
                                                    <a href="javascript: void(0);" class="text-muted">
                                                        <i class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i> Development
                                                    </a>
                                                </li>
                                                <li class="list-inline-item me-3">
                                                    <a href="javascript: void(0);" class="text-muted">
                                                        <i class="bx bx-comment-dots align-middle text-muted me-1"></i> 08 Comments
                                                    </a>
                                                </li>
                                            </ul>
                                            <p class="text-muted">Aenean ornare mauris velit. Donec imperdiet, massa sit amet porta maximus, massa justo faucibus nisi,
                                                 eget accumsan nunc ipsum nec lacus. Etiam dignissim turpis sit amet lectus porttitor eleifend. Maecenas ornare molestie metus eget feugiat.
                                                 Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>

                                        </div>
                                        <div class="position-relative mt-3">
                                            <img src="assets/images/profile-bg-2.jpg" alt="" class="img-thumbnail">
                                        </div>
                                        <div class="pt-3">
                                            <div class="d-flex align-items-center justify-content-between border-bottom pb-3">
                                                <div >
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item me-3">
                                                            <a href="javascript: void(0);" class="text-muted">
                                                                <i class="bx bx-purchase-tag-alt text-muted me-1"></i> Project
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item me-3">
                                                            <a href="javascript: void(0);" class="text-muted">
                                                                <i class="bx bx-like align-middle text-muted me-1"></i> 12 Like
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar-group">
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block">
                                                                    <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-sm">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block">
                                                                    <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-sm">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block">
                                                                    <img src="assets/images/users/avatar-7.jpg" alt="" class="rounded-circle avatar-sm">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item">
                                                                <a href="javascript: void(0);" class="d-inline-block">
                                                                    <img src="assets/images/users/avatar-6.jpg" alt="" class="rounded-circle avatar-sm">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="ms-2" >
                                                            <button type="button" class="btn btn-outline-primary btn-sm waves-effect">Share <i class="bx bx-share-alt align-middle ms-1"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="text-muted mt-4">Praesent fringilla neque vestibulum, consectetur arcu quis, rutrum arcu. Vivamus vitae pulvinar dolor,
                                                    sit amet lacinia dolor. Mauris tincidunt lacinia nisi, non molestie leo consequat a.
                                                    Sed varius lobortis leo, vitae venenatis tortor ullamcorper condimentum.</p>

                                            <div class="mt-4 pt-2">
                                                <h5 class="f-18">2 Comments</h5>
                        
                                                <div class="mt-4 pt-2">
                                                    <div class="comment-section border-bottom pb-4">
                                                        <div class="d-flex">
                                                            <img src="assets/images/users/avatar-2.jpg" class="rounded-circle avatar-md" alt="img-missing">
                                                            <div class="flex-1 ms-4">
                                                                <div class="post-meta float-end">
                                                                    <span><i class="mdi mdi-calendar me-2"></i>Feb 13, 2021</span>
                                                                </div>
                                                                <h5 class="font-size-15">Natasha Andrews</h5>
                                                                <p class="text-muted w-75 mb-0">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                        
                                                    <div class="comment-section pt-4 ps-5 ms-4">
                                                        <div class="d-flex">
                                                            <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-md" alt="img-missing">
                                                            <div class="flex-1 ms-4">
                                                                <div class="post-meta float-end">
                                                                    <span><i class="mdi mdi-calendar me-2"></i>Feb 13, 2021</span>
                                                                </div>
                                                                <h5 class="font-size-15">Pranav Gamewala</h5>
                                                                <p class="text-muted w-75">Donec non nisl dui. Integer pellentesque nibh mi, elementum pellentesque purus tincidunt ut. Suspendisse venenatis feugiat elit sed risus ornare laoreet.</p>
                                                                <div class="mt-4">
                                                                    <a href="" class="btn btn-primary btn-sm"><i class="mdi mdi-reply me-1"></i> Reply</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end blog post --> 
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end tab pane -->
                </div>
                <!-- end tab content -->
            </div>
            <!-- end col -->

            <div class="col-xl-4 col-lg-4">

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Team Members</h5>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle table-nowrap">
                                <tbody>
                                    <tr>
                                        <td style="width: 50px;"><img src="assets/images/users/avatar-2.jpg" class="rounded-circle avatar-sm" alt=""></td>
                                        <td><h5 class="font-size-14 m-0"><a href="javascript: void(0);" class="text-dark">Daniel Canales</a></h5></td>
                                        <td>
                                            <div>
                                                <a href="javascript: void(0);" class="badge bg-soft-primary text-primary font-size-11">Frontend</a>
                                                <a href="javascript: void(0);" class="badge bg-soft-primary text-primary font-size-11">UI</a>
                                            </div>
                                        </td>
                                        <td>
                                            <i class="mdi mdi-circle-medium font-size-18 text-success align-middle me-1"></i> Online
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="assets/images/users/avatar-1.jpg" class="rounded-circle avatar-sm" alt=""></td>
                                        <td><h5 class="font-size-14 m-0"><a href="javascript: void(0);" class="text-dark">Jennifer Walker</a></h5></td>
                                        <td>
                                            <div>
                                                <a href="javascript: void(0);" class="badge bg-soft-primary text-primary font-size-11">UI / UX</a>
                                            </div>
                                        </td>
                                        <td>
                                            <i class="mdi mdi-circle-medium font-size-18 text-warning align-middle me-1"></i> Buzy
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="avatar-sm">
                                                <span class="avatar-title rounded-circle bg-primary text-white font-size-16">
                                                    C
                                                </span>
                                            </div>
                                        </td>
                                        <td><h5 class="font-size-14 m-0"><a href="javascript: void(0);" class="text-dark">Carl Mackay</a></h5></td>
                                        <td>
                                            <div>
                                                <a href="javascript: void(0);" class="badge bg-soft-primary text-primary font-size-11">Backend</a>
                                            </div>
                                        </td>
                                        <td>
                                            <i class="mdi mdi-circle-medium font-size-18 text-success align-middle me-1"></i> Online
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-sm" alt=""></td>
                                        <td><h5 class="font-size-14 m-0"><a href="javascript: void(0);" class="text-dark">Janice Cole</a></h5></td>
                                        <td>
                                            <div>
                                                <a href="javascript: void(0);" class="badge bg-soft-primary text-primary font-size-11">Frontend</a>
                                                <a href="javascript: void(0);" class="badge bg-soft-primary text-primary font-size-11">UI</a>
                                            </div>
                                        </td>
                                        <td>
                                            <i class="mdi mdi-circle-medium font-size-18 text-success align-middle me-1"></i> Online
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="avatar-sm">
                                                <span class="avatar-title rounded-circle bg-primary text-white font-size-16">
                                                    T
                                                </span>
                                            </div>
                                        </td>
                                        <td><h5 class="font-size-14 m-0"><a href="javascript: void(0);" class="text-dark">Tony Brafford</a></h5></td>
                                        <td>
                                            <div>
                                                <a href="javascript: void(0);" class="badge bg-soft-primary text-primary font-size-11">Backend</a>
                                            </div>
                                        </td>
                                        <td>
                                            <i class="mdi mdi-circle-medium font-size-18 text-secondary align-middle me-1"></i> Offline
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Weekly Hours</h5>
                    </div>
                    <div class="card-body">
                        <div id="overview-chart" data-colors='["--bs-primary"]' class="apex-charts" dir="ltr"></div>
                    </div>
                </div>


                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Skills</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-2 font-size-16">
                            <a href="#" class="badge badge-soft-primary">Photoshop</a>
                            <a href="#" class="badge badge-soft-primary">illustrator</a>
                            <a href="#" class="badge badge-soft-primary">HTML</a>
                            <a href="#" class="badge badge-soft-primary">CSS</a>
                            <a href="#" class="badge badge-soft-primary">Javascript</a>
                            <a href="#" class="badge badge-soft-primary">Php</a>
                            <a href="#" class="badge badge-soft-primary">Python</a>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
        
    </div> <!-- container-fluid -->
</div>
</div>
    
@endsection