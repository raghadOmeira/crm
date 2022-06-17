<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lite CRM</title>

	@include('partials/css')
  @include('partials/js')

<script>
  function windowOpen(pUrl, pName, pWidth, pHeight)
  {
    left=(screen.width-pWidth)/2;
    top=(screen.height-pHeight)/2;

    newWindow=window.open(pUrl, pName, "toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=1,resizable=0,width="+pWidth+", height="+pHeight+",screenX=0,screenY=0,top="+top+",left="+left);
    newWindow.focus();

    return newWindow;
  }

/*  function showChangeAccountWindow()
  {
    var changeAccountWindow;

    if (changeAccountWindow && !changeAccountWindow.closed)
      changeAccountWindow.focus();

    changeAccountWindow=windowOpen("{{ URL::to('/') }}/account/showChangeAccount", "changeAccountWindow", 450, 400);
  }*/
</script>
</head>
<body>
  <nav class="navbar navbar-default ui-state-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-top-menu">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Lite CRM</a>
      </div>

      <div class="collapse navbar-collapse" id="navbar-collapse-top-menu">

      <ul class="nav navbar-nav">
          <li class="ui-state-default"><a href="/lead">  Leads  </a></li>
          <li class="ui-state-default" ><a href="/contact">  Contacts  </a></li>
          <li class="ui-state-default" ><a href="/account">  Accounts  </a></li>
          <li class="ui-state-default" ><a href="/opportunities">  Opportunities  </a></li>
          <li  class="ui-state-default"><a href="/activities">  Activities  </a></li>
          <li class="ui-state-default"><a href="/leadsource">  Leadsource  </a></li>
          <li  class="ui-state-default"><a href="/homee">  run_activities   </a></li>
          <li  class="ui-state-default"><a href="/dashboard">  dashboard   </a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }}<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
               <li><a href="/setting">Settings</a></li>
              <li><a href="/user/profile">Profile</a></li>
              <li><a href="/auth/logout">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  @include('partials/page-messages')
  @yield('content')
</body>
</html>
