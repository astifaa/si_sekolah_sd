<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	@include('includes.head')
</head>
@php
$bodyClass = (!empty($boxedLayout)) ? 'boxed-layout' : '';
$bodyClass .= (!empty($paceTop)) ? 'pace-top ' : '';
$bodyClass .= (!empty($bodyExtraClass)) ? $bodyExtraClass . ' ' : '';
$sidebarHide = (!empty($sidebarHide)) ? $sidebarHide : '';
$sidebarTwo = (!empty($sidebarTwo)) ? $sidebarTwo : '';
$sidebarSearch = (!empty($sidebarSearch)) ? $sidebarSearch : '';
$topMenu = (!empty($topMenu)) ? $topMenu : '';
$footer = (!empty($footer)) ? $footer : '';

$pageContainerClass = (!empty($topMenu)) ? 'page-with-top-menu ' : '';
$pageContainerClass .= (!empty($sidebarRight)) ? 'page-with-right-sidebar ' : '';
$pageContainerClass .= (!empty($sidebarLight)) ? 'page-with-light-sidebar ' : '';
$pageContainerClass .= (!empty($sidebarWide)) ? 'page-with-wide-sidebar ' : '';
$pageContainerClass .= (!empty($sidebarHide)) ? 'page-without-sidebar ' : '';
$pageContainerClass .= (!empty($sidebarMinified)) ? 'page-sidebar-minified ' : '';
$pageContainerClass .= (!empty($sidebarTwo)) ? 'page-with-two-sidebar ' : '';
$pageContainerClass .= (!empty($contentFullHeight)) ? 'page-content-full-height ' : '';

$contentClass = (!empty($contentFullWidth) || !empty($contentFullHeight)) ? 'content-full-width ' : '';
$contentClass .= (!empty($contentInverseMode)) ? 'content-inverse-mode ' : '';
@endphp
<body class="{{ $bodyClass }}">
	@include('includes.component.page-loader')
	
	<div id="page-container" class="page-container fade page-sidebar-fixed page-header-fixed {{ $pageContainerClass }}">
		
		@include('includes.header')
		
		@includeWhen($topMenu, 'includes.top-menu')
		
		@includeWhen(!$sidebarHide, 'includes.sidebar')
		
		@includeWhen($sidebarTwo, 'includes.sidebar-right')
		
		<div id="content" class="content {{ $contentClass }}">
			@yield('content')
		</div>
		
		@includeWhen($footer, 'includes.footer')
		
		@include('includes.component.scroll-top-btn')
		
	</div>
	
	@include('includes.page-js')
	
	{{-- begin Script DataTable --}}
	<script src="{{ asset('assets/plugins/datatables.net/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('assets/js/demo/table-manage-responsive.demo.js') }}"></script>
	{{-- end Script DataTable --}}
	
	<script src="{{ asset('assets/plugins/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.all.min.js') }}"></script>
	<script src="{{ asset('assets/js/demo/form-wysiwyg.demo.js') }}"></script>

	<script src="{{ asset('assets/plugins/superbox/jquery.superbox.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/isotope-layout/dist/isotope.pkgd.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/lightbox2/dist/js/lightbox.min.js') }}"></script>
	<script src="{{ asset('assets/js/demo/gallery.demo.js') }}"></script>

</body>
</html>
