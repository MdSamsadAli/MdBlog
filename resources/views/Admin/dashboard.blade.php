
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">

</head>
<body>
    <!-- === wrapper section === -->
    <section id="wrapper" class="d-flex w-100">
        <!-- aside nav-->
        <aside class="border-right shadow-sm" id="aside-nav">
            <!-- aside logo brand -->

            <a href="#" class="aside-brand text-decoration-none border-bottom mb-3">
                <!-- svg -->
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                    <path d="M19.4,4.1l-9-4C10.1,0,9.9,0,9.6,0.1l-9,4C0.2,4.2,0,4.6,0,5s0.2,0.8,0.6,0.9l9,4C9.7,10,9.9,10,10,10s0.3,0,0.4-0.1l9-4
                          C19.8,5.8,20,5.4,20,5S19.8,4.2,19.4,4.1z"></path>
                    <path d="M10,15c-0.1,0-0.3,0-0.4-0.1l-9-4c-0.5-0.2-0.7-0.8-0.5-1.3c0.2-0.5,0.8-0.7,1.3-0.5l8.6,3.8l8.6-3.8c0.5-0.2,1.1,0,1.3,0.5
                          c0.2,0.5,0,1.1-0.5,1.3l-9,4C10.3,15,10.1,15,10,15z"></path>
                    <path d="M10,20c-0.1,0-0.3,0-0.4-0.1l-9-4c-0.5-0.2-0.7-0.8-0.5-1.3c0.2-0.5,0.8-0.7,1.3-0.5l8.6,3.8l8.6-3.8c0.5-0.2,1.1,0,1.3,0.5
                          c0.2,0.5,0,1.1-0.5,1.3l-9,4C10.3,20,10.1,20,10,20z"></path>
                </svg>
                <!-- /svg -->
                <span class="ms-2">Dashboard</span>
            </a>
            <!-- /aside logo brand -->

            <!-- aside nav ul list -->
            <ul class="nav flex-column" id="aside-nav-ul">
                <li class="nav-item" showForm="1">
                    <a class="nav-link active" href="#">
                        <i class="fa fa-plus-circle" style="font-size: 18px;"></i>
                        <span class="ms-2">Add Blog</span>
                    </a>
                </li>

                <li class="nav-item" showForm="2">
                    <a class="nav-link" href="#">
                        <i class="fa fa-minus-circle" style="font-size: 18px;"></i>
                        <span class="ms-2">Edit Blog</span>
                    </a>
                </li>

                <li class="nav-item" showForm="3">
                    <a class="nav-link" href="#">
                        <!-- svg -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout align-middle">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="3" y1="9" x2="21" y2="9"></line>
                            <line x1="9" y1="21" x2="9" y2="9"></line>
                        </svg>
                        <!-- /svg -->
                        <span class="ms-2">Products List</span>
                    </a>
                </li>

                <li class="nav-item" showForm="4">
                    <a class="nav-link" href="#">
                        <!-- svg -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout align-middle">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="3" y1="9" x2="21" y2="9"></line>
                            <line x1="9" y1="21" x2="9" y2="9"></line>
                        </svg>
                        <!-- /svg -->
                        <span class="ms-2">Products Views</span>
                    </a>
                </li>
                {{-- <!-- @if($user->type === "admin") --> --}}
                <li class="nav-item" showForm="5">
                    <a class="nav-link" href="#">
                        <!-- svg -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                        </svg>
                        <!-- /svg -->
                        <span class="ms-2">Change Users Role</span>
                    </a>
                </li>
                {{-- <!-- @endif --> --}}
                <li class="nav-item" showForm="6">
                    <a class="nav-link" href="#">
                        <!-- svg -->
                        <i class="fa fa-list-ol"></i>
                        <!-- /svg -->
                        <span class="ms-2">status</span>
                    </a>
                </li>
                {{-- <!-- @if($user->type === "admin") --> --}}

                <li class="nav-item" showForm="7">
                    <a class="nav-link" href="#">
                        <!-- svg -->
                        <i class="fa fa-bars"></i>
                        <!-- /svg -->
                        <span class="ms-2">requests</span>
                    </a>
                </li>
                {{-- <!-- @endif --> --}}

            </ul>
            <!-- /aside nav ul list -->
        </aside>
        <!-- /aside nav-->

        <!-- === main === -->
        <main class="w-100 bg-light d-flex flex-column" id="main">
            <!-- === header === -->

            <header id="header-navbar" class="sticky-top w-100">
                <nav class="navbar navbar-expand navbar-light bg-white shadow-sm w-100">
                    <div class="container-fluid">

                        <div class="border rounded-circle shadow-sm p-2" id="aside-toggle-btn">
                            <!-- svg -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                                <path fill="black" fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                            </svg>

                            <!-- /svg -->
                        </div>
                        <div>
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item dropdown user-dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <!--svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                        </svg>
                                        <!--/svg-->
                                        <span>username</span>
                                    </a>
                                    <ul class="dropdown-menu shadow-sm" aria-labelledby="navbarDropdownMenuLink">
                                        <li><a href="/" style="color:black;">go home</a></li>
                                        <li><a href="{{route('authe')}}" style="color:black;">Login</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                {{-- create and insert  --}}
                <div class="forms w-100" id="form1">
                    <form method="post" id="defaultForm" action="{{route('store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="users">Product Name</label>
                            <input type="text" class="form-control" id="user" name="product_name" placeholder="Enter Product Name" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="exampleInputEmail1">Price</label>
                            <input type="text" class="form-control" id="" name="price" placeholder="Enter Product Price" required>
                        </div>


                        <div class="form-group mb-3">
                            <label for="exampleFormControlTextarea1">Category</label>

                            <select class="form-control" name="category" id="categoryOptions">
                                <option value="Robotics">Robotics</option>
                                <option value="Automotive">Automotive</option>
                                <option value="Lot">Lot</option>
                                <option value="Microcontrollers">Microcontrollers</option>
                                <option value="Computer-OS">Computer-OS</option>
                                <option value="artifical Intelligence">artifical Intelligence</option>
                                <option value="Engineering">Engineering</option>
                                <option value="Space Science">Space Science</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="exampleFormControlTextarea1">tags</label>
                            <input type="text" class="form-control" id="user" name="tags" placeholder="seprate tags with space" required>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlFile1">Product Image</label>
                            <input type="file" class="form-control-file" name="image">
                            {{-- <img src="" alt=""> --}}
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                {{-- create and insert value  --}}
                
               

                <div class="forms w-100 hide" id="form3">
                    <table>
                        <thead>
                            <tr>
                                <td scope = "col">Product Name</td>
                                <td scope = "col">Price</td>
                                <td scope = "col">category</td>
                                <td scope = "col">tags</td>
                                <td scope = "col">Product Image</td>
                                <td scope = "col">Action</td>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($db as $data)
                            <tr>
                                <td scope = "col">{{$data->product}}</td>
                                <td scope = "col">{{$data->price}}</td>
                                <td scope = "col">{{$data->category}}</td>
                                <td scope = "col">{{$data->tags}}</td>
                                <td scope = "col">
                                    @if($data->images)
                                        <img src="{{asset('uploads/admin/'.$data->images)}}" alt="img" style="width:100px; height:100px">
                                        @else
                                        <span>Image not found</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route("delete", $data['id'])}}">Delete</a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

                <div class="forms w-100 hide" id="form4">
                    <div class="container">
                        <div class="main-form">
                            <div class="text">
                                {{-- <h1>blog</h1> --}}
                                @foreach($db as $data)
    
                                <div class="shape-4">
                                    <div>
                                        @if($data->images)
                                            <img src="{{asset('uploads/admin/'.$data->images)}}" alt="img">
                                        @else
                                            <span>Image not found</span>
                                        @endif
                                    </div>
                                    <div>
                                        <h2>{{$data->product}}</h2>
                                        <h2>{{$data->price}}</h2>
                                    </div>
                                </div>
                                @endforeach

                                {{-- <div class="shape-4">
                                    <div>
                                        <img src="public/image.jpg" alt="image">
                                    </div>
                                    <div>
                                        <h2>beautiful picture</h2>
                                    </div>
                                </div>

                                <div class="shape-4">
                                    <div>
                                        <img src="public/image.jpg" alt="image">
                                    </div>
                                    <div>
                                        <h2>beautiful picture</h2>
                                    </div>
                                </div>

                                <div class="shape-4">
                                    <div>
                                        <img src="public/image.jpg" alt="image">
                                    </div>
                                    <div>
                                        <h2>beautiful picture</h2>
                                    </div>
                                </div> --}}
                            </div>
                            <img src="1.jpg" alt="">
                        </div>
                    </div>
                </div>

                <div class="forms w-100 hide" id="form5">
                    <table>
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">email</th>
                                <th scope="col">user role</th>
                            </tr>
                        </thead>

                        <tbody>
                             
                            <form action="#" method="post">
                                <tr>
                                    <td>UserId</td>
                                    <td>Email</td>
                                    <td>
                                        <input type="text" class="userRole" value="usertype" name="userRole">
                                        <select name="" onchange="userTypeChanged(this)" id="">
                                            <option value="userType" selected>userType</option>
                                        </select>
                                    </td>
                                </tr>
                            </form>
                        </tbody>
                    </table>
                </div>
                
                <div class="forms w-100 hide" id="form6">

                    <h1>Total Visits : 100</h1>

                </div>

                 

                



                {{-- <!-- @if($user->type === "admin")
                @endif --> --}}

                <div class="forms w-100 hide" id="form7">

                    <h3>requests for writer role</h3>
                    <br>
                    <table>
                        <thead>
                            <tr>
                                <!-- <th scope="col">id</th> -->
                                <th scope="col">email</th>
                                <th scope="col">profession</th>
                                <th scope="col">topic</th>
                                <th scope="col">student</th>
                                <th scope="col">user role</th>
                            </tr>
                        </thead>
                        <tbody>

                            {{-- <!-- @foreach ($requests as $request) --}}
                            {{-- @if($request->status === "pending")
                            <form method="post" action="/role/{{$request->user->id}}">
                                @csrf -->
                                <form action="#" method="post"></form>
                                <tr>
                                    <!-- <td scope="row" data-label="name">{{$request->id}}</td> -->
                                    <!-- <td data-label="tag">{{$request->user->email}}</td>
                                    <td data-label="tag">{{$request->profession}}</td>
                                    <td data-label="tag">{{$request->topic}}</td>
                                    <td data-label="tag">{{$request->student === 0 ? "no" : "yes" }}</td>
                                    <input type="hidden" class="userRole" value="writer" name="userRole">
                                    <td data-label="Online Date"><input class="custom_btn_edit" type="submit" value="approve"></td> -->
                                </tr>
                            </form>
                            <!-- @endif

                            @endforeach --> --}}
                        </tbody>
                    </table>
                </div>

            </header>
        </main>
        <!-- === /main === -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            $(document).ready(function() {

                //side nav toggle button hide/show
                $("#aside-toggle-btn").click(function() {
                    $("#aside-nav, main").toggleClass("active");
                });

                //aside nav dropdown caret icon rotate
                $("#aside-nav-ul .nav-link").click(function() {
                    $(this).find(".dropdown-caret-svg").toggleClass("rotate-svg");
                });

                //aside nav > nav link remove/add active class on click
                $("#aside-nav-ul .nav-link").click(function() {
                    $("#aside-nav-ul .nav-link").removeClass("active");
                    $(this).addClass("active");
                });

                //click on one dropdown second one automatically hide and change svg icon to
                $("#aside-nav-ul").on('click', '.nav-item', function() {
                    const liElement = $(this);
                    liElement.siblings().children().children(".dropdown-caret-svg").removeClass("rotate-svg");
                    liElement.siblings().children(".aside-dropdown-menu").removeClass("show");
                    if ($(this).hasClass("active")) {
                        liElement.siblings().children(".aside-dropdown-menu").addClass("show");
                    }
                });
            });
        </script>
    </section>
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>

    <script src="js/dashboard.js"></script>

    <!-- === /wrapper section === -->
</body>

</html>