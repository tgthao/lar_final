@extends('admin.master')
@section('title','Trang Chính')
@section('content')
<table class="function_table" style="margin: 0px auto;">
 <input type="hidden" name="_token" value="{{ csrf_token() }}">
	<tr>
		<td class="function_item user_add"><a href="{!! route('getUserAdd') !!}">Thêm user</a></td>
		<td class="function_item user_list"><a href="{!! route('getUserList') !!}">Quản lý user</a></td>
		<td rowspan="3" class="statistics_panel">
			<h3>Thống kê:</h3>
			<ul>
				<li>Tổng số user: {!! $sta_user!!}</li>
				<li>Tổng số danh mục: {!! $sta_category!!}</li>
				<li>Tổng số tin: {!! $sta_news!!}</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td class="function_item cate_add"><a href="{!! route('getCateAdd') !!}">Thêm danh mục</a></td>
		<td class="function_item cate_list"><a href="{!! route('getCateList') !!}">Quản lý danh mục</a></td>
	</tr>
	<tr>
		<td class="function_item news_add"><a href="{!! route('getNewsAdd') !!}">Thêm tin</a></td>
		<td class="function_item news_list"><a href="{!! route('getNewsList') !!}">Quản lý tin</a></td>
	</tr>
</table>  
@endsection