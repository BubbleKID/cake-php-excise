<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="page-title">
      <div class="title_left">
        <h3>Inbox Design <small>Some examples to get you started</small></h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>
    <div class="row">
      <?= $this->fetch('content')?>
    </div>
  </div>
</div>
