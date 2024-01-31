
@include('admin.header');
   
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                        <div class="card  mb-2">
                            <div class="card-header p-3 pt-2">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">weekend</i>
                                </div>
                                <div class="text-end pt-1">
                                    <b class="text-sm mb-0 text-capitalize text-primary">Totale Books</b>
                                    <h4 class="mb-0"> </h4>
                                </div>
                            </div>

                            <hr class="dark horizontal my-0">
                            <div class="card-footer p-3">
                                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than
                                    last week</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                        <div class="card  mb-2">
                            <div class="card-header p-3 pt-2">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">leaderboard</i>
                                </div>
                                <div class="text-end pt-1">
                                    <b class="text-sm mb-0 text-capitalize text-primary">Today's Users</b >
                                    <h4 class="mb-0"></h4>
                                </div>
                            </div>

                            <hr class="dark horizontal my-0">
                            <div class="card-footer p-3">
                                <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than
                                    last month</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                        <div class="card  mb-2">
                            <div class="card-header p-3 pt-2 bg-transparent">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">store</i>
                                </div>
                                <div class="text-end pt-1">
                                    <b class="text-sm mb-0 text-capitalize text-primary ">All The Copies</b>
                                    <h4 class="mb-0 "></h4>
                                </div>
                            </div>
    
                            <hr class="horizontal my-0 dark">
                            <div class="card-footer p-3">
                                <p class="mb-0 "><span class="text-success text-sm font-weight-bolder">+1% </span>than
                                    yesterday</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                        <div class="card mb-2">
                            <div class="card-header p-3 pt-2 bg-transparent">
                                <div
                                    class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons opacity-10">person_add</i>
                                </div>
                                <div class="text-end pt-1">
                                    <b class="text-sm mb-0 text-capitalize text-primary ">Available Copies</b>
                                    <h4 class="mb-0 "></h4>
                                </div>
                            </div>
    
                            <hr class="horizontal my-0 dark">
                            <div class="card-footer p-3">
                                <p class="mb-0 ">Just updated</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
    

        <div class="fresh-table full-color-orange">
  <!--
    Available colors for the full background: full-color-blue, full-color-azure, full-color-green, full-color-red, full-color-orange
    Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-green, toolbar-color-red, toolbar-color-orange
  -->

  
    <!-- <div class="col-lg-3 col-sm-6 col-12 mt-3 mb-3">
                  <button class="btn bg-gradient-success w-50 mb-0 toast-btn" type="button" data-target="successToast"><a href="form.php">ADD Client</a></button>
                </div> -->
  

  <table id="fresh-table" class="table">
    <thead>
      <th data-field="id">ID</th>
      <th data-field="name">Name</th>
      <th data-field="Last name">Last Name</th>
      <th data-field="Email">Email</th>
      <th data-field="Role">Role</th>
      <th data-field="Phone" data-formatter="operateFormatter" data-events="operateEvents">Phone</th>
      
    </thead>
    <tbody>
   
      <tr>
       
        <!-- <td><button  class="btn btn-default"><a href="edit.php?id=">Edit</a></button></td>-->
        <td><a class="btn btn-link text-dark px-3 mb-0" href="../dashboard/edit.php?id="><i class="material-icons text-sm me-2">edit</i>Edit</a></td> 
        <td><button  class="btn btn-default"><a href="../../app/controllers/admin/deleteUser.php?id="><lord-icon
    src="https://cdn.lordicon.com/skkahier.json"
    trigger="hover"
    style="width:30px;height:30px">
</lord-ico></a></button></td>
  </div>
      </tr>
      @foreach ($books as $book)
      <tr>
          <td>{{ $book->id }}</td>
          <td>{{ $book->title }}</td>
          <td>{{ $book->author }}</td>
          <td>{{ $book->genre }}</td>
          <td>{{ $book->description }}</td>
          <td>{{ $book->publication_year}}</td>
          <td>{{ $book->total_copies }}</td>
          <td>{{ $book->available_copies }}</td>
      </tr> 
      @endforeach
    
    </tbody>
  </table>
</div>

    </div>


    
    

   
<script src="https://cdn.lordicon.com/lordicon.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>