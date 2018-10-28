@extends('layouts.home')
@section('content')
<div class="content">
        <div class="container-fluid">
          
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Post Quote</h4>
                  <p class="card-category">What is in your mind?</p>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Query Subject</label>
                          <input type="text" class="form-control" name="title">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Write Your Query</label>
                          <div class="form-group">
                            <label class="bmd-label-floating">Query</label>
                            <textarea class="form-control" rows="5"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
           
          </div>
          
        </div>
      </div>


@endsection