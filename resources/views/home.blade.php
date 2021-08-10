<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Home Task</title>
  </head>
  <body>
<div class="table-responsive">

                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>@lang('site.longitude')</th>
                                            <th>@lang('site.latitude')</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse ($locations as $index=>$location)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $location->longitude }}</td>
                                                <td>{{ $location->latitude }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="15" class="text-center">@lang('site.no_data_found')</td>
                                            </tr>
                                        @endforelse
                                        </tbody>
                                    </table><!-- end of table -->
                                    {{ $locations->links() }}
                                </div>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>