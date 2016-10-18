
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Bootstrap Confirmation</title>

  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  <link href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="http://mistic100.github.io/Bootstrap-Confirmation/assets/css/docs.min.css" rel="stylesheet">
  <link href="http://mistic100.github.io/Bootstrap-Confirmation/assets/css/style.css" rel="stylesheet">

  <style>
    #content {
      background:#009ece;
      background:linear-gradient(135deg, #009ece, #003354);
    }
  </style>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="http://mistic100.github.io/Bootstrap-Confirmation/assets/js/docs.min.js"></script>
</head>

<body>
  <!-- Main navigation
  =========================================== -->
  <header class="navbar navbar-static-top bs-docs-nav" id="top">
    <div class="container">
      <div class="navbar-header" role="banner">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="http://mistic100.github.io/Bootstrap-Confirmation/index.html">Bootstrap Confirmation</a>
      </div>
      <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
        <ul class="nav navbar-nav">
        
          
        
        </ul>
        <ul class="nav navbar-nav navbar-right">
        
          <li>
            <a href="https://github.com/mistic100/Bootstrap-Confirmation">GitHub</a>
          </li>
        
          <li>
            <a href="http://www.strangeplanet.fr">StrangePlanet</a>
          </li>
        
        </ul>
      </nav>
    </div>
  </header>


  <!-- Header
  =========================================== -->
  
  <div class="bs-docs-masthead" id="content">
    <div class="container">
      <h1 class="home-title">Bootstrap Confirmation</h1>
      <p class="lead">Bootstrap plugin for on-place confirm boxes using Popover</p>
      <p class="lead">
        <a href="https://github.com/mistic100/Bootstrap-Confirmation" class="btn btn-outline-inverse btn-lg">Download</a>
      </p>
      <p class="version">Currently v2.1.1</p>
    </div>
  </div>

  

  <div class="container bs-docs-container">
    <div class="row">
      <!-- Content
      =========================================== -->
      <div class="col-md-9" role="main">
        <section class="bs-docs-section">
	<h3>Let's face it: Confirmation dialog boxes are annoying !</h3>
  <blockquote>
    <em>ethaizone :</em><br>
    This is my primary reason I wrote this plugin. I wanted a simple box to comfirm a task. Instead of using rude boxes that interrupt a user's workflow, <strong>let's use a popover instead</strong>.
  </blockquote>
</section>


<section class="bs-docs-section">
  <h1 id="installation" class="page-header">Installation</h1>

  <h3>CSS</h3>
  <p>The plugin uses the default popover styling Bootstrap provides.</p>

  <h3>JS Dependencies</h3>
  <ul>
      <li><a href="http://jquery.com">jQuery >= 1.9.0</a></li>
      <li><a href="http://getbootstrap.com">Bootstrap Popover 3.x.x</a> (included in bootstrap.js)</li>
  </ul>

  <h3>Let's go!</h3>
  <p>Download <a href="http://raw.githubusercontent.com/mistic100/Bootstrap-Confirmation/master/bootstrap-confirmation.min.js">bootstrap-confirmation.js</a> and include it after <code>jquery.js</code> and <code>bootstrap.js</code>.</p>

<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;script </span><span class="na">src=</span><span class="s">&quot;path/to/jquery.js&quot;</span><span class="nt">&gt;&lt;/script&gt;</span>
<span class="nt">&lt;script </span><span class="na">src=</span><span class="s">&quot;path/to/bootstrap.js&quot;</span><span class="nt">&gt;&lt;/script&gt;</span>
<span class="nt">&lt;script </span><span class="na">src=</span><span class="s">&quot;path/to/bootstrap-confirmation.js&quot;</span><span class="nt">&gt;&lt;/script&gt;</span></code></pre></div>
  
  <p>It is also available on Bower under the name <code>bootstrap-confirmation2</code>.</p>
</section>

<section class="bs-docs-section">
  <h1 id="examples" class="page-header">Examples</h1>

  <h3 id="basic-demo">Basic demo</h3>
  <p>Add small overlays with "Yes" and "No" buttons, like those on the iPad, to any element. Click the button to trigger the confirmation.</p>
  <div class="bs-example">
    <button class="btn btn-large btn-danger" data-toggle="confirmation">Default configuration</button>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">&quot;btn btn-default&quot;</span> <span class="na">data-toggle=</span><span class="s">&quot;confirmation&quot;</span><span class="nt">&gt;</span>Confirmation<span class="nt">&lt;/button&gt;</span></code></pre></div>

  <h3 id="custom-buttons">Custom buttons</h3>
  <p>Has personalized labels, icons and colors.</p>
  <div class="bs-example">
    <button class="btn btn-large btn-primary" data-toggle="confirmation" data-btn-ok-label="Continue" data-btn-ok-icon="glyphicon glyphicon-share-alt" data-btn-ok-class="btn-success" data-btn-cancel-label="Stoooop!" data-btn-cancel-icon="glyphicon glyphicon-ban-circle" data-btn-cancel-class="btn-danger">Custom button</button>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">&quot;btn btn-default&quot;</span> <span class="na">data-toggle=</span><span class="s">&quot;confirmation&quot;</span> <span class="na">data-btn-ok-label=</span><span class="s">&quot;Continue&quot;</span> <span class="na">data-btn-ok-icon=</span><span class="s">&quot;glyphicon glyphicon-share-alt&quot;</span> <span class="na">data-btn-ok-class=</span><span class="s">&quot;btn-success&quot;</span> <span class="na">data-btn-cancel-label=</span><span class="s">&quot;Stoooop!&quot;</span> <span class="na">data-btn-cancel-icon=</span><span class="s">&quot;glyphicon glyphicon-ban-circle&quot;</span> <span class="na">data-btn-cancel-class=</span><span class="s">&quot;btn-danger&quot;</span><span class="nt">&gt;</span>Confirmation<span class="nt">&lt;/button&gt;</span></code></pre></div>

  <h3 id="4-directions">Four directions</h3>
  <div class="bs-example">
    <div class="bs-example-tooltips">
      <button class="btn btn-default" data-toggle="confirmation" data-placement="left">Confirmation on left</button>
      <button class="btn btn-default" data-toggle="confirmation" data-placement="top">Confirmation on top</button>
      <button class="btn btn-default" data-toggle="confirmation" data-placement="bottom">Confirmation on bottom</button>
      <button class="btn btn-default" data-toggle="confirmation" data-placement="right">Confirmation on right</button>
    </div>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">&quot;btn btn-default&quot;</span> <span class="na">data-toggle=</span><span class="s">&quot;confirmation&quot;</span> <span class="na">data-placement=</span><span class="s">&quot;left&quot;</span><span class="nt">&gt;</span>Confirmation on left<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">&quot;btn btn-default&quot;</span> <span class="na">data-toggle=</span><span class="s">&quot;confirmation&quot;</span> <span class="na">data-placement=</span><span class="s">&quot;top&quot;</span><span class="nt">&gt;</span>Confirmation on top<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">&quot;btn btn-default&quot;</span> <span class="na">data-toggle=</span><span class="s">&quot;confirmation&quot;</span> <span class="na">data-placement=</span><span class="s">&quot;bottom&quot;</span><span class="nt">&gt;</span>Confirmation on bottom<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">&quot;btn btn-default&quot;</span> <span class="na">data-toggle=</span><span class="s">&quot;confirmation&quot;</span> <span class="na">data-placement=</span><span class="s">&quot;right&quot;</span><span class="nt">&gt;</span>Confirmation on right<span class="nt">&lt;/button&gt;</span></code></pre></div>

  <h3 id="singleton">Singleton</h3>
  <p>Only one boxe visible at once.</p>
  <div class="bs-example">
    <div class="bs-example-tooltips">
      <button class="btn btn-default" data-toggle="confirmation-singleton">Confirmation 1</button>
      <button class="btn btn-default" data-toggle="confirmation-singleton">Confirmation 2</button>
    </div>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">&quot;btn btn-default&quot;</span> <span class="na">data-toggle=</span><span class="s">&quot;confirmation&quot;</span> <span class="na">data-singleton=</span><span class="s">&quot;true&quot;</span><span class="nt">&gt;</span>Confirmation 1<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">&quot;btn btn-default&quot;</span> <span class="na">data-toggle=</span><span class="s">&quot;confirmation&quot;</span> <span class="na">data-singleton=</span><span class="s">&quot;true&quot;</span><span class="nt">&gt;</span>Confirmation 2<span class="nt">&lt;/button&gt;</span></code></pre></div>

  <h3 id="popout">Popout</h3>
  <p>Click anywhere on the page to close all boxes.</p>
  <div class="bs-example">
    <div class="bs-example-tooltips">
      <button class="btn btn-default" data-toggle="confirmation-popout">Confirmation 1</button>
      <button class="btn btn-default" data-toggle="confirmation-popout">Confirmation 2</button>
    </div>
  </div>
<div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">&quot;btn btn-default&quot;</span> <span class="na">data-toggle=</span><span class="s">&quot;confirmation&quot;</span> <span class="na">data-popout=</span><span class="s">&quot;true&quot;</span><span class="nt">&gt;</span>Confirmation 1<span class="nt">&lt;/button&gt;</span>
<span class="nt">&lt;button</span> <span class="na">class=</span><span class="s">&quot;btn btn-default&quot;</span> <span class="na">data-toggle=</span><span class="s">&quot;confirmation&quot;</span> <span class="na">data-popout=</span><span class="s">&quot;true&quot;</span><span class="nt">&gt;</span>Confirmation 2<span class="nt">&lt;/button&gt;</span></code></pre></div>
</section>

<section class="bs-docs-section">
  <h1 id="usage" class="page-header">Usage</h1>

  <p>Enable confirmations via JavaScript:</p>
  <div class="highlight"><pre><code class="language-javascript" data-lang="javascript"><span class="nx">$</span><span class="p">(</span><span class="s1">&#39;#example&#39;</span><span class="p">).</span><span class="nx">confirmation</span><span class="p">(</span><span class="nx">options</span><span class="p">);</span></code></pre></div>

  <p>Recommend way to use:</p>
  <div class="highlight"><pre><code class="language-javascript" data-lang="javascript"><span class="nx">$</span><span class="p">(</span><span class="s1">&#39;[data-toggle=confirmation]&#39;</span><span class="p">).</span><span class="nx">confirmation</span><span class="p">(</span><span class="nx">options</span><span class="p">);</span></code></pre></div>
  
  <div class="bs-callout bs-callout-danger">
    <h4>Declaration order</h4>
    <p>Confirmation tries to cancel the default event of the target and trigger it when the "Ok" button is clicked. However, in order to have the good behavior, the plugin must be initialized <b>before</b> manually attaching event listener (with <code>$.on()</code>).</p>
    <p>If this is not possible, you could listen the <code>confirmed.bs.confirmation</code> or use the <code>onConfirm</code> callback.</p>
  </div>
  
  <div class="bs-callout bs-callout-info">
    <h4>About links</h4>
    <p>If Confirmation is attached to a <code>&lt;a&gt;</code> tag, the <code>href</code> attribute will be removed and moved to the "Ok" button.</p>
  </div>

  <h2 id="options">Options</h2>
  <p>Options can be passed via data attributes or JavaScript plain object. For data attributes, append the option name to <code>data-</code>, as in <code>data-btn-ok-class=""</code>.</p>
  <p>All options from <a href="http://getbootstrap.com/javascript/#popovers">Bootstrap Popover</a> can be used except <code>content</code>.</p>
  
  <div class="table-responsive">
    <table class="table table-bordered table-striped">
      <thead>
       <tr>
         <th style="width: 130px;">Name</th>
         <th style="width: 100px;">type</th>
         <th style="width: 150px;">default</th>
         <th>description</th>
       </tr>
      </thead>
      <tbody>
       <tr>
         <td>title</td>
         <td>string | function</td>
         <td>'Are you sure?'</td>
         <td>default <i>content</i> value if <code>title</code> attribute isn't present.</td>
       </tr>
       <tr>
         <td>singleton</td>
         <td>boolean</td>
         <td>false</td>
         <td>Set <code>true</code> to allow only one confirmation to show at a time.<br>
            When the newest confirmation element is clicked, the older ones will disappear.
         </td>
       </tr>
       <tr>
         <td>popout</td>
         <td>boolean</td>
         <td>false</td>
         <td>Set <code>true</code> to hide the confirmation when user clicks outside of it.<br>
            This will affect all confirmations that use same selector.
         </td>
       </tr>
       <tr>
         <td>btnOkClass</td>
         <td>string</td>
         <td>'btn-xs btn-primary'</td>
         <td>Class of the "Ok" button.</td>
       </tr>
       <tr>
         <td>btnOkIcon</td>
         <td>string</td>
         <td>'glyphicon glyphicon-ok'</td>
         <td>Icon class of the "Ok" button.</td>
       </tr>
       <tr>
         <td>btnOkLabel</td>
         <td>string</td>
         <td>'Yes'</td>
         <td>Label of the "Ok" button.</td>
       </tr>
       <tr>
         <td>btnCancelClass</td>
         <td>string</td>
         <td>'btn-xs btn-default'</td>
         <td>Class of the "Cancel" button.</td>
       </tr>
       <tr>
         <td>btnCancelIcon</td>
         <td>string</td>
         <td>'glyphicon glyphicon-remove'</td>
         <td>Icon class of the "Cancel" button.</td>
       </tr>
       <tr>
         <td>btnCancelLabel</td>
         <td>string</td>
         <td>'No'</td>
         <td>Label of the "Cancel" button.</td>
       </tr>
       <tr>
         <td>onConfirm</td>
         <td>function</td>
         <td>$.noop</td>
         <td>Callback called when the "Ok" button is clicked.<br>
            In <code>data-on-confirm</code> you can give the name of a function like <code>myConfirm</code> or <code>myObject.confirm</code>.
         </td>
       </tr>
       <tr>
         <td>onCancel</td>
         <td>function</td>
         <td>$.noop</td>
         <td>Callback called when the "Cancel" button is clicked.<br>
            In <code>data-on-cancel</code> you can give the name of a function like <code>myCancel</code> or <code>myObject.cancel</code>.
         </td>
       </tr>
      </tbody>
    </table>
  </div>
  
  <div class="bs-callout bs-callout-info">
    <h4>Data attributes for individual popovers</h4>
    <p>Options for individual popovers can alternatively be specified through the use of data attributes, as explained above.</p>
  </div>
  
  <h2 id="methods">Methods</h2>
  <h4>.confirmation('show')</h4>
  <p>Reveals an elements confirmation.</p>
  <div class="highlight"><pre><code class="language-javascript" data-lang="javascript"><span class="nx">$</span><span class="p">(</span><span class="s1">&#39;#element&#39;</span><span class="p">).</span><span class="nx">confirmation</span><span class="p">(</span><span class="s1">&#39;show&#39;</span><span class="p">);</span></code></pre></div>
  
  <h4>.confirmation('hide')</h4>
  <p>Hides an elements confirmation.</p>
  <div class="highlight"><pre><code class="language-javascript" data-lang="javascript"><span class="nx">$</span><span class="p">(</span><span class="s1">&#39;#element&#39;</span><span class="p">).</span><span class="nx">confirmation</span><span class="p">(</span><span class="s1">&#39;hide&#39;</span><span class="p">);</span></code></pre></div>
  
  <h4>.confirmation('toggle')</h4>
  <p>Toggles an elements confirmation.</p>
  <div class="highlight"><pre><code class="language-javascript" data-lang="javascript"><span class="nx">$</span><span class="p">(</span><span class="s1">&#39;#element&#39;</span><span class="p">).</span><span class="nx">confirmation</span><span class="p">(</span><span class="s1">&#39;toggle&#39;</span><span class="p">);</span></code></pre></div>
  
  <h4>.confirmation('destroy')</h4>
  <p>Hides and destroys an element's confirmation.</p>
  <div class="highlight"><pre><code class="language-javascript" data-lang="javascript"><span class="nx">$</span><span class="p">(</span><span class="s1">&#39;#element&#39;</span><span class="p">).</span><span class="nx">confirmation</span><span class="p">(</span><span class="s1">&#39;destroy&#39;</span><span class="p">);</span></code></pre></div>
  
  <h2 id="events">Events</h2>
  <p>All events from <a href="http://getbootstrap.com/javascript/#popovers">Bootstrap Popover</a> are available but suffixed with <code>bs.confirmation</code>.</p>
  
  <div class="table-responsive">
    <table class="table table-bordered table-striped">
      <thead>
       <tr>
         <th style="width: 150px;">Event Type</th>
         <th>Description</th>
       </tr>
      </thead>
      <tbody>
       <tr>
         <td>confirmed.bs.confirmation</td>
         <td>This event is fired when the "Ok" button is clicked.</td>
       </tr>
       <tr>
         <td>canceled.bs.confirmation</td>
         <td>This event is fired when the "Cancel" button is clicked.</td>
       </tr>
      </tbody>
    </table>
  </div>
</section>

<script src="http://mistic100.github.io/Bootstrap-Confirmation/dist/bootstrap-confirmation2/bootstrap-confirmation.min.js"></script>

<script>
  $('[data-toggle=confirmation]').confirmation();
  $('[data-toggle=confirmation-singleton]').confirmation({ singleton:true });
  $('[data-toggle=confirmation-popout]').confirmation({ popout: true });
</script>

      </div>

      <!-- Page navigation
      =========================================== -->
      <div class="col-md-3" role="complementary">
        <div class="bs-docs-sidebar hidden-print">
          <ul class="nav bs-docs-sidenav">
          </ul>
          <a class="back-to-top" href="#top">
            <i class="glyphicon glyphicon-chevron-up"></i> Back to top
          </a>
        </div>
      </div>
    </div>
  </div>


  <!-- Footer
  =========================================== -->
  <footer class="bs-docs-footer" role="contentinfo">
    <div class="container">
      <div class="bs-docs-social">
        <ul class="bs-docs-social-buttons">
        
          <li>
            <iframe class="github-btn" src="http://ghbtns.com/github-btn.html?user=mistic100&amp;repo=Bootstrap-Confirmation&amp;type=watch&amp;count=true" width="90" height="20" title="Star on GitHub"></iframe>
          </li>
          <li>
            <iframe class="github-btn" src="http://ghbtns.com/github-btn.html?user=mistic100&amp;repo=Bootstrap-Confirmation&amp;type=fork&amp;count=true" width="90" height="20" title="Fork on GitHub"></iframe>
          </li>
        
        
          <li>
            <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://mistic100.github.io/Bootstrap-Confirmation" data-count="horizontal" data-via="mistic100" data-text="Bootstrap Confirmation" data-hashtags="">Tweet</a>
          </li>
        
        
        
          <li>
            <div class="fb-like" data-href="http://mistic100.github.io/Bootstrap-Confirmation" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
          </li>
        
        
        </ul>
      </div>

      <p>
        Licensed under <a href="http://www.apache.org/licenses/LICENSE-2.0" target="_blank">Apache License v2.0</a>,
        documentation under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.
      </p>
      <p>
        Documentation template by <a href="http://getbootstrap.com">Bootstrap team</a>,
        generated with <a href="https://github.com/mistic100/jekyll-bootstrap-doc">Jekyll Bootstrap Doc</a>
      </p>

      <ul class="bs-docs-footer-links muted">
        <li>Currently v2.1.1</li>
      
        <li>&middot;</li>
        <li><a href="https://github.com/mistic100/Bootstrap-Confirmation">GitHub</a></li>
      
        <li>&middot;</li>
        <li><a href="https://github.com/mistic100/Bootstrap-Confirmation/issues?state=open">Issues</a></li>
      
      </ul>
    </div>
  </footer>


  <!-- Async scripts
  =========================================== -->
  
  <script src="http://d3js.org/d3.v3.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/trianglify/0.1.2/trianglify.min.js"></script>
  <script>trianglify('#009ece', '#003354');</script>
  

  
  <script>
    window.twttr = (function (d,s,id) {
      var t, js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return; js=d.createElement(s); js.id=id; js.async=1;
      js.src="https://platform.twitter.com/widgets.js"; fjs.parentNode.insertBefore(js, fjs);
      return window.twttr || (t = { _e: [], ready: function(f){ t._e.push(f) } });
    }(document, "script", "twitter-wjs"));
  </script>
  

  
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
  

  
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-28192323-3', 'mistic100.github.io');
    ga('send', 'pageview');
  </script>
  

</body>
</html>
