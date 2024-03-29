@extends('layouts.admin_v2.template')

@section('content')
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>記事のリスト</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">記事</li>
				</ol>
			</div>
		</div>
	</div>
</section>

<section class="content">
	<div class="container-fluid">
		<div class="row">
      <div class="container-fluid text-right" style="margin-bottom: 16px;">
        <a class="btn btn-success" href="{{ route('artikel.create') }} ">
          記事を作る
        </a>
      </div>
			<div class="col-md-12">
        @include('includes.admin_v2.alerts')
        <div class="card">
          <div class="card-body">
            <table class="table table-bordered table-striped" id="list-table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>タイトル</th>
                  <th>投稿者</th>
                  <th>カテゴリー</th>
                  <th>タグ</th>
                  <th>コメントの数</th>
                  <th>ステータス</th>
                  <th>アクション</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
			</div>
		</div>
    <div class="modal fade" id="deleteModal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">記事を削除</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>この記事を消してもよろしですか?</p>
          </div>
          <div class="modal-footer justify-content-center">
            {{ Form::open(['url'=>url('admin/artikel/'),'method'=>'delete',"id"=>"data-delete-form"]) }}
              <button type="submit" class="btn btn-danger">削除</button>
            {{ Form::close() }}
          </div>
        </div>
      </div>
    </div>
	</div>
</section>
@endsection

@section('page_scripts')
  <script type="text/javascript">
    $(function () {
      var table = $('#list-table').DataTable({
        processing: true,
        serverSide: true,
				// edit from ' to "
        ajax: "{!! route('artikel.index') !!}",
        columns: [
          {
            data: null,
            searchable: false,
            orderable: false,
            render: function (data, type, row, meta) {
              var start = meta.settings._iDisplayStart;
              var length = meta.settings._iDisplayLength;
              return start + meta.row + 1;
            }
          },
          {data: 'title', name: 'title'},
          {data: 'writer', name: 'writer'},
          {data: 'category.name', name: 'category.name'},
          {data: 'tags', name: 'tags'},
          {data: 'comment_count', name: 'comment_count'},
          {data: 'status', name: 'status'},
          {data: 'actions', name: 'actions', orderable: false, searchable: false}
        ],
        responsive: true,
        lengthChange: false,
        autoWidth: false,
        paging: true,
        pageLength: 5,
        drawCallback: function (settings) {
          // Mengatur ulang nomor urut pada setiap halaman
          var api = this.api();
          var startIndex = api.context[0]._iDisplayStart;
          api.column(0, {order: 'applied', search: 'applied'}).nodes().each(function (cell, i) {
              cell.innerHTML = startIndex + i + 1;
          });
        }
      });
    });
  </script>
@endsection
