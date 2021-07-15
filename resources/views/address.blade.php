<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<style>
    .form-control-borderless {
    border: none;
}

.form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
    border: none;
    outline: none;
    box-shadow: none;
}
</style>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<div class="container">
    <br/>
	<div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8">
                            <form  method="post" action="{{ route("address.post") }}"  class="card card-sm">
                                @csrf
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fas fa-search h4 text-body"></i>
                                    </div>
                                    <!--end of col-->
                                    <div class="col">
                                        <input value="{{ request()->address }}" name="address" class="form-control form-control-lg form-control-borderless" type="text" placeholder="Search address">
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                        <button class="btn btn-lg btn-success" type="submit">Search</button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
                        <!--end of col-->

                       


                       @if(count($users) > 0)
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Postcode</th>
                                <th scope="col">Address</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                  <tr>
                                    <th scope="col">{{ $user->name }}</th>
                                    <th scope="col">{{ $user->email }}</th>
                                    <th scope="col">{{ $user->postcode }}</th>
                                    <th scope="col">{{ $user->address }}</th>
                                  </tr>    
                                @endforeach
                            </tbody>
                          </table>
                          @endif
                          



                        


                    </div>
</div>