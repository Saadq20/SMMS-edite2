<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>SMMS</title>

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="../vendors/images/apple-touch-icon.png"
		/>
	
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="../vendors/images/favicon-32x32.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="../vendors/images/favicon-16x16.png"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="../vendors/styles/core.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="../vendors/styles/icon-font.min.css"
		/>
		<link rel="stylesheet" type="text/css" href="../vendors/styles/style.css" />
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script
			async
			src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
		></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag("js", new Date());

			gtag("config", "G-GBZ3SGGX85");
		</script>
		<!-- Google Tag Manager -->
		<script>
			(function (w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != "dataLayer" ? "&l=" + l : "";
				j.async = true;
				j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
		</script>
		<style type="text/css">

.grid-container {
  display: grid;
  grid-template-columns: auto auto auto;
  background-color: rgb(160, 158, 158);
  padding: 10px;
  width: 500px;
  float:right;
  margin-right:300px; 
}
.twitter{
  background-color: rgba(255, 255, 255, 0.8);
  border: 1px solid rgba(0, 0, 0, 0.8);
  padding: 20px;
  font-size: 20px;
  text-align: center;
}
.facebook {
  background-color: rgba(255, 255, 255, 0.8);
  border: 1px solid rgba(0, 0, 0, 0.8);
  padding: 20px;
  font-size: 20px;
  text-align: center;
}
.img-responsive {
  width: 100%;
  margin: auto;
}
.fb-cards-designs {
  margin-top: 16px;
}
.user-thumb {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  overflow: hidden;
  float: left;
  margin-right: 8px;
}
.fb-clone-card {
  max-width: 500px;
  margin: auto;
  background-color: #fff;
  border: 1px solid #dddfe2;
  border-radius: 3px;
  margin-bottom: 10px;
}
.fb-clone-card .fb-card-main-content {
  padding: 12px;
  padding-bottom: 0;
}
.fb-clone-card .fb-card-main-content .fb-card-header {
  position: relative;
}
.fb-clone-card .fb-card-main-content .fb-card-header .user-post-info {
  overflow: hidden;
}
.fb-clone-card .fb-card-main-content .fb-card-header .user-post-info .user-information {
  float: left;
  line-height: 1.34;
}
.fb-clone-card .fb-card-main-content .fb-card-header .user-post-info .user-information p {
  color: #385898;
  cursor: pointer;
  text-decoration: none;
  font-size: 14px;
  line-height: 1.38;
  font-weight: 600;
  margin: 0;
}
.fb-clone-card .fb-card-main-content .fb-card-header .user-post-info .user-information small {
  color: #616770;
  font-size: 12px;
}
.fb-clone-card .fb-card-main-content .fb-card-header .post-action {
  position: absolute;
  top: 0;
  right: 0;
  cursor: pointer;
}
.fb-clone-card .fb-card-main-content .fb-card-header .post-action i {
  color: #606771;
}
.fb-clone-card .fb-card-main-content .fb-card-header .post-action:hover i {
  color: #1d2129;
}
.fb-clone-card .fb-card-main-content .fb-card-body.simple-text-card {
  margin-top: 6px;
  font-size: 14px;
  font-weight: normal;
  line-height: 1.38;
}
.fb-clone-card .fb-card-main-content .fb-card-body.simple-text-card p {
  margin: 0;
}
.fb-clone-card .fb-card-main-content .fb-card-body.simple-image-card {
  padding-bottom: 0;
}
.fb-clone-card .fb-card-main-content .fb-card-body.simple-image-card .images-container {
  margin-top: 12px;
  margin-left: -12px;
  margin-right: -12px;
}
.fb-clone-card .fb-card-main-content .fb-card-body.simple-image-post {
  padding-bottom: 0;
}
.fb-clone-card .fb-card-main-content .fb-card-body.simple-image-post a {
  display: block;
  text-decoration: none;
}
.fb-clone-card .fb-card-main-content .fb-card-body.simple-image-post a:hover {
  opacity: 0.8;
}
.fb-clone-card .fb-card-main-content .fb-card-body.simple-image-post .sponsord-post-title-links {
  background-color: #e9ebee;
  padding: 12px 10px;
  border-bottom: 1px solid #dddfe3;
}
.fb-clone-card .fb-card-main-content .fb-card-body.simple-image-post .sponsord-post-title-links small {
  color: #5f676f;
  text-transform: uppercase;
  font-size: 12px;
}
.fb-clone-card .fb-card-main-content .fb-card-body.simple-image-post .sponsord-post-title-links h5 {
  color: #1e2229;
  margin: 0;
}
.fb-clone-card .fb-card-actions-holder {
  display: flex;
  margin: 0 12px;
  min-height: 32px;
  padding: 4px 0;
}
.fb-clone-card .fb-card-actions-holder .fb-card-actions {
  display: flex;
  flex-direction: row;
  flex-grow: 1;
  order: 1;
}
.fb-clone-card .fb-card-actions-holder .fb-card-actions .fb-btn-holder {
  align-items: center;
  display: flex;
  flex: 1 0 0px;
  justify-content: center;
}
.fb-clone-card .fb-card-actions-holder .fb-card-actions .fb-btn-holder a {
  width: 100%;
  align-items: center;
  color: #606770;
  display: flex;
  flex: 1 0;
  font-weight: 600;
  height: 32px;
  justify-content: center;
  line-height: 14px;
  padding: 0 2px;
  position: relative;
  text-decoration: none;
  transition: 400ms cubic-bezier(0.08, 0.52, 0.52, 1) transform;
  font-size: 13px;
  border-radius: 3px;
}
.fb-clone-card .fb-card-actions-holder .fb-card-actions .fb-btn-holder a i {
  font-size: 18px;
  margin-right: 6px;
}
.fb-clone-card .fb-card-actions-holder .fb-card-actions .fb-btn-holder a:hover {
  background-color: #f2f2f2;
}
.fb-clone-card .fb-card-comments {
  border-top: 1px solid #dadde1;
}
.fb-clone-card .fb-card-comments .comment-input-holder {
  padding: 8px;
}
.fb-clone-card .fb-card-comments .comment-input-holder .user-thumb {
  width: 32px;
  height: 32px;
}
.fb-clone-card .fb-card-comments .comment-input-holder .comment-input {
  background-color: #f2f3f5;
  border: 1px solid #ccd0d5;
  border-radius: 16px;
  display: flex;
  justify-content: flex-end;
}
.fb-clone-card .fb-card-comments .comment-input-holder .comment-input .comment-box {
  font-size: 13px;
  cursor: text;
  flex: 1 1 auto;
  line-height: 16px;
  overflow: hidden;
  padding: 8px 12px;
  outline: none;
  user-select: text;
  white-space: pre-wrap;
  overflow-wrap: break-word;
}
.fb-clone-card .fb-card-comments .comment-input-holder .comment-input .comment-box[placeholder]:empty:before {
  content: attr(placeholder);
  color: #555;
}
.fb-clone-card .fb-card-like-comment-holder {
  align-items: center;
  border-bottom: 1px solid #dadde1;
  color: #606770;
  display: flex;
  line-height: 20px;
  margin: 10px 12px 0 12px;
  padding: 0 0 10px 0;
}
.fb-clone-card .fb-card-like-comment-holder .fb-card-like-comment {
  display: flex;
  flex: auto;
  justify-content: space-between;
}
.fb-clone-card .fb-card-like-comment-holder .fb-card-like-comment .like-comment-holder span {
  cursor: pointer;
  display: inline-block;
  text-decoration: none;
  white-space: nowrap;
  font-size: 13px;
}
.fb-clone-card .fb-card-like-comment-holder .fb-card-like-comment .like-comment-holder span:last-child {
  margin-left: 7px;
}
.fb-clone-card .fb-card-like-comment-holder .fb-card-like-comment .likes-emoji-holder span {
  cursor: pointer;
  display: inline-block;
  text-decoration: none;
  white-space: nowrap;
  font-size: 13px;
}

			</style>
		<!-- End Google Tag Manager -->
	</head>
	<body>
		<div class="pre-loader">
			<div class="pre-loader-box">
				
				<div class="loader-progress" id="progress_div">
					<div class="bar" id="bar1"></div>
				</div>
				<div class="percent" id="percent1">0%</div>
				<div class="loading-text">Loading...</div>
			</div>
		</div>

		<div class="header">
			<div class="header-left">
				<div class="menu-icon bi bi-list"></div>
				<div
					class="search-toggle-icon bi bi-search"
					data-toggle="header_search"
				></div>
				<div class="header-search">
					
				</div>
			</div>
			<div class="header-right">
				<a
							href="javascript:void(0);"
							class=" header-dark"
							
						>
				<div class="dashboard-setting user-notification">
					<div class="dropdown">
						<a
							class="dropdown-toggle no-arrow"
							href="javascript:;"
							data-toggle="right-sidebar"
						>
							<i class="dw dw-settings2"></i>
						</a>
					</div>
				</div>
				<div class="user-notification">
					<div class="dropdown">
						<a
							class="dropdown-toggle no-arrow"
							href="#"
							role="button"
							data-toggle="dropdown"
						>
							<i class="icon-copy dw dw-notification"></i>
							<span class="badge notification-active"></span>
						</a>
						<div class="dropdown-menu dropdown-menu-right">
							<div class="notification-list mx-h-350 customscroll">
								
							</div>
						</div>
					</div>
				</div>
				<div class="user-info-dropdown">
					<div class="dropdown">
						<a
							class="dropdown-toggle"
							href="#"
							role="button"
							data-toggle="dropdown"
						>
							<span class="user-icon">
								<img src="../vendors/images/saad.jpg" alt="" />
							</span>
							<span class="user-name">Saad</span>
						</a>
						<div
							class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
						>
							<a class="dropdown-item" href="profile.html"
								><i class="dw dw-user1"></i> Profile</a
							>
							<a class="dropdown-item" href="profile.html"
								><i class="dw dw-settings2"></i> Setting</a
							>
							<a class="dropdown-item" href="faq.html"
								><i class="dw dw-help"></i> Help</a
							>
							<a class="dropdown-item" href="login.html"
								><i class="dw dw-logout"></i> Log Out</a
							>
						</div>
					</div>
				</div>
				
			</div>
		</div>

		<div class="right-sidebar">
			<div class="sidebar-title">
				<h3 class="weight-600 font-16 text-blue">
					Layout Settings
					<span class="btn-block font-weight-400 font-12"
						>User Interface Settings</span
					>
				</h3>
				<div class="close-sidebar" data-toggle="right-sidebar-close">
					<i class="icon-copy ion-close-round"></i>
				</div>
			</div>
			<div class="right-sidebar-body customscroll">
				<div class="right-sidebar-body-content">
					<h4 class="weight-600 font-18 pb-10">Header Background</h4>
					<div class="sidebar-btn-group pb-30 mb-10">
						
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary header-dark"
							>Dark</a
						>
					</div>

					<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
					<div class="sidebar-btn-group pb-30 mb-10">
						
						<a
							href="javascript:void(0);"
							class="btn btn-outline-primary sidebar-dark active"
							>Dark</a
						>
					</div>

					<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
					<div class="sidebar-radio-group pb-10 mb-10">
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-1"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-1"
								checked=""
							/>
							<label class="custom-control-label" for="sidebaricon-1"
								><i class="fa fa-angle-down"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-2"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-2"
							/>
							<label class="custom-control-label" for="sidebaricon-2"
								><i class="ion-plus-round"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebaricon-3"
								name="menu-dropdown-icon"
								class="custom-control-input"
								value="icon-style-3"
							/>
							<label class="custom-control-label" for="sidebaricon-3"
								><i class="fa fa-angle-double-right"></i
							></label>
						</div>
					</div>

					<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
					<div class="sidebar-radio-group pb-30 mb-10">
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-1"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-1"
								checked=""
							/>
							<label class="custom-control-label" for="sidebariconlist-1"
								><i class="ion-minus-round"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-2"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-2"
							/>
							<label class="custom-control-label" for="sidebariconlist-2"
								><i class="fa fa-circle-o" aria-hidden="true"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-3"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-3"
							/>
							<label class="custom-control-label" for="sidebariconlist-3"
								><i class="dw dw-check"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-4"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-4"
								checked=""
							/>
							<label class="custom-control-label" for="sidebariconlist-4"
								><i class="icon-copy dw dw-next-2"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-5"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-5"
							/>
							<label class="custom-control-label" for="sidebariconlist-5"
								><i class="dw dw-fast-forward-1"></i
							></label>
						</div>
						<div class="custom-control custom-radio custom-control-inline">
							<input
								type="radio"
								id="sidebariconlist-6"
								name="menu-list-icon"
								class="custom-control-input"
								value="icon-list-style-6"
							/>
							<label class="custom-control-label" for="sidebariconlist-6"
								><i class="dw dw-next"></i
							></label>
						</div>
					</div>

					<div class="reset-options pt-30 text-center">
						<button class="btn btn-danger" id="reset-settings">
							Reset Settings
						</button>
					</div>
				</div>
			</div>
		</div>
       
		<div class="left-side-bar">
			<div class="brand-logo">
				<a href="index.html">
					<img src="../assets/img/smms-w.jpg" class="smmss " style="height:60px; width: 200px; padding-left:60px"/>
					<img
						
						alt=""
						class="light-logo"
					/>
				</a>
				<div class="close-sidebar" data-toggle="left-sidebar-close">
					<i class="ion-close-round"></i>
				</div>
			</div> 
			
			
			
			<!-- end nav -->
      

            <!-- start left options -->




            <div class="menu-block customscroll">
				<div class="sidebar-menu">
					<ul id="accordion-menu">
						<br>
						<li>
							<a href="{{URL::to('/user_post')}}" class="dropdown-toggle no-arrow">
								<span class="micon bi bi-arrow-right-circle"></span
								><span class="mtext">Post</span>
							</a>
						</li>
					
						
						<li>
							<div class="dropdown-divider"></div>
						</li>

						<li>
							<a href="{{URL::to('/schdule')}} " class="dropdown-toggle no-arrow">
								<span class="micon bi bi-table"></span
								><span class="mtext">schedule</span>
							</a>
						</li>

					

						<li>
							<div class="dropdown-divider"></div>
						</li>
						
						<li>
							<a class="dropdown-toggle no-arrow">
								<span class="micon bi bi-pie-chart"></span
								><span class="mtext">Analysis</span>
							</a>
						</li>
					
						

						<li>
							<div class="dropdown-divider"></div>
						</li>

						<li>
							<a href="{{URL::to('/accounts')}}" class="dropdown-toggle no-arrow">
								<span class="micon 	bi bi-person"></span
								><span class="mtext">Accounts</span>
							</a>
						</li>
						

						<li>
							<div class="dropdown-divider"></div>
						</li>
						
						<li>
							<a
								href="https://dropways.github.io/deskapp-free-single-page-website-template/"
								target="_blank"
								class="dropdown-toggle no-arrow"
							>
								
								
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div> 


        <!-- End left options -->


                    <!--Start content -->



                    <div class="row">
						<div class="col-md-6 mb-30">
							<div class="pd-20 card-box height-100-p">
								<h4 class="h4 text-blue">Pie Chart</h4>
								<div id="chart8"></div>
							</div>
						</div>
						<div class="col-md-6 mb-30">
							<div class="pd-20 card-box height-100-p">
								<h4 class="h4 text-blue">Radial Bar Chart</h4>
								<div id="chart9"></div>
							</div>
						</div>
					</div>
				</div>

                   <!-- End Content -->
				<div class="footer-wrap pd-20 mb-20 card-box">
					
	<h3 style="background-color:#DCDCD;"> Number of posts: {{count($Analysis)}}  </h3> 	
					<br>
				@foreach ($Analysis as $item)
				<div >

	



		<div class="fb-cards-designs">
			<img src="/assets/img/twitter.png">
			<div class="fb-clone-card">
				<div class="fb-card-main-content">
					<div class="fb-card-header">
						<div class="user-post-info">
							<div class="user-thumb">
								<img src="/assets/img/avatar.png">
							</div>
							<div class="user-information">
								<p style="padding-top: 12px">@ user_name</p>
								<small>1 hr</small>
							</div>
						</div>
						<div class="post-action">
							
						</div>
					</div>
		
					<div class="fb-card-body simple-text-card">
						<p>{{$item->twitter_count}} 	 </p>
					</div>
		
				</div>
		
				<div class="fb-card-like-comment-holder">
					<div class="fb-card-like-comment">
						
					</div>
				</div>
		
				<div class="fb-card-actions-holder">
					<div class="fb-card-actions">
						<div class="fb-btn-holder">
							<a href="#"><img src="/assets/img/like.png"></i> Like</a>
						</div>
						<div class="fb-btn-holder">
							<a href="#"><img src="/assets/img/comment.png"></i> Comment</a>
						</div>
						<div class="fb-btn-holder">
							<a href="#"><img src="/assets/img/share.png">Share</a>
						</div>
					</div>	</div> </div>


		
				</div>
	<br>

		<div class="fb-cards-designs">
			<img src="/assets/img/facebook.png">
			<div class="fb-clone-card">
				<div class="fb-card-main-content">
					<div class="fb-card-header">
						<div class="user-post-info">
							<div class="user-thumb">
								<img src="/assets/img/avatar.png">
							</div>
							<div class="user-information">
								<p  style="padding-top: 12px">@ user_name</p>
							
							</div>
						</div>
						<div class="post-action">
						
						</div>
					</div>
		
					<div class="fb-card-body simple-text-card">
						<p>{{$item->facebook_count}} </p>
					</div>
		
				</div>
		
				<div class="fb-card-like-comment-holder">
					<div class="fb-card-like-comment">
						
					</div>
				</div>
		
				<div class="fb-card-actions-holder">
					<div class="fb-card-actions">
						<div class="fb-btn-holder">
							<a href="#"><i class="far fa-thumbs-up"></i> Like</a>
						</div>
						<div class="fb-btn-holder">
							<a href="#"><i class="far fa-comment-alt"></i> Comment</a>
						</div>
						<div class="fb-btn-holder">
							<a href="#"><i class="far fa-share-square"></i> Share</a>
						</div>
					</div>	</div> </div>
	 
	 <br>

	<hr>



		
				@endforeach
				</div>
			</div>
		</div>
        <br><br><br> <br>
                                <div class="footer-wrap pd-20 mb-20 card-box">
                                    SMMScopy right & 2022
                                    
                                </div>

     


   <!-- js -->
   <script src="../vendors/scripts/core.js"></script>
   <script src="../vendors/scripts/script.min.js"></script>
   <script src="../vendors/scripts/process.js"></script>
   <script src="../vendors/scripts/layout-settings.js"></script>
   <script src="../src/plugins/fullcalendar/fullcalendar.min.js"></script>
   <script src="../vendors/scripts/calendar-setting.js"></script>
   <!-- Google Tag Manager (noscript) -->
   <noscript
       ><iframe
           src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
           height="0"
           width="0"
           style="display: none; visibility: hidden"
       ></iframe
   ></noscript>
<!-- End Google Tag Manager (noscript) -->
</body>
</html>