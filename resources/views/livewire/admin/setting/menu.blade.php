<div class="container-fluid">
    {{-- <div class="alert alert-info">
        <h3>DataTables <small>Table plug-in for jQuery</small></h3>
        <p>DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table.</p>
    </div> --}}
    <div data-widget-group="group1">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>Data Tables</h2>
                        <div class="panel-ctrls"></div>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                <select wire:model="paginate" class="form-control sm">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-4"></div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="ti ti-search"></i>
                                    </span>
                                    <input wire:model="search" type="text" class="form-control sm" placeholder="Search......" autocomplete="current-password">
                                </div>
                            </div>
                        </div>
                        <br>
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Parent</th>
                                    <th>Title</th>
                                    <th>Icon</th>
                                    <th>Url</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $r)
                                    <tr>
                                        <td>{{ $r->parent->title ?? '-' }}</td>
                                        <td>{{ $r->title }}</td>
                                        <td>{{ $r->icon }}</td>
                                        <td>{{ $r->url }}</td>
                                        <td class="center"></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="panel-footer text-right">
                        {{ $data->links('livewire.pagination') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- .container-fluid -->
