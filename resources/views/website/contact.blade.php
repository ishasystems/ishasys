@include('website.nav')

<div class="container" style="padding-top:150px;">
    <div class="row">
            <span> </span>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Panel Heading</div>
                <div class="panel-body">Panel Content</div>
              </div>
        </div>
        <div class="col-md-6">
            <div class="form panel panel-default">
                <div class="panel-heading">
                    <h4>Request for quote</h4>
                </div>
                <span class="response-message"></span>
                <div class="panel-body">
                <form action="" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter Your Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Enter Your Email">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="Enter Your Mobile Number">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="" id="" cols="30" rows="10" placeholder="Enter Your Requirements">

                            </textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" align="center">Send </button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
