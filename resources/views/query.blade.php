@extends('layouts.home')
@section('content')
<div class="content">
        <div class="container-fluid">
          
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Query</h4>
                  <p class="card-category">Please ask your query.</p>
                </div>
                <div class="card-body">
                    
                  <form method="POST" action=" {{ route('sendmail') }}">
                  @csrf
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Query Subject</label>
                          <input type="text" class="form-control" name="title" required="">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Contact</label>
                          <input type="text" class="form-control" maxlength="10" required="" name="contact">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Write Your Query</label>
                          <div class="form-group">
                            <label class="bmd-label-floating">Query</label>
                            <textarea class="form-control" name="query" rows="5">Query: </textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    <div class="clearfix"></div>
                  </form>
                  @if(Session::has('success'))
                        <div class="col-md-12">
                          <div class="card">
                          <div class="card-body">
                          {{ Session::get('success')  }}
                          </div>
                          </div>
                    @endif
                </div>
              </div>
            </div>
           
          </div>
          
        </div>
      </div>


@endsection