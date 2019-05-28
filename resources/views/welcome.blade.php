<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h1>Dropdown</h1>
            <form action="{{route('main.req')}}" method="POST" enctype="multipart/form-data">
            @csrf
           <div class="form-group">
               <label for="province">select Provinsi</label>
               <select name="province" id="province" class="form-control">
                   <option value="">select option</option>
                   @foreach ($province as $key => $value)
                       <option value="{{$key}}" >{{$value}}</option>
                   @endforeach
               </select>

           </div>
           <div class="form-group">
            <label for="city">select Provinsi</label>
            <select name="city" id="province" class="form-control">
                <option value="">select option</option>
               
            </select>

        </div>
        <div class="form-group">
            <label for="camat">select kecamatan</label>
            <select name="camat" id="province" class="form-control">
                <option value="">select option</option>
               
            </select>
        </div>
        <div class="form-group">
            <label for="desa">select Desa</label>
            <select name="desa" id="province" class="form-control">
                <option value="">select option</option>
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-info">simpan</button>
        </div>
        </form>
        </div>
    <script src="{{asset('js/jquery.js')}}"> </script>
    <script>
        $(document).ready(function(){
            $('select[name="province"]').on('change', function(){
                var provinsi_id = $(this).val();
                    if(provinsi_id){
                        $.ajax({
                            url: '/getCity/'+provinsi_id,
                            type : 'GET',
                            dataType : 'Json',
                            success : function(data){
                                console.log(data);
                                $('select[name="city"]').empty();
                                $.each(data, function(key, values)
                                {
                                    $('select[name="city"]').append('<option value="'+key+'">'+values+'</option>');
                                });
                            }
                        });


                        //console.log(provinsi_id)
                    }
            });
            $('select[name="city"]').on('change', function(){
                var kabupaten_id = $(this).val();
                    if(kabupaten_id){
                        
                        $.ajax({
                            url: '/getCamat/'+kabupaten_id,
                            type : 'GET',
                            dataType : 'Json',
                            success : function(data){
                                console.log(data);
                                $('select[name="camat"]').empty();
                                $.each(data, function(key, values)
                                {
                                    $('select[name="camat"]').append('<option value="'+key+'">'+values+'</option>');
                                });
                            }
                        });
                        //console.log(kabupaten_id)
                    }
            });
            
            $('select[name="camat"]').on('change', function(){
                var kecamatan_id = $(this).val();
                    if(kecamatan_id){
                        
                        $.ajax({
                            url: '/getDesa/'+kecamatan_id,
                            type : 'GET',
                            dataType : 'Json',
                            success : function(data){
                                console.log(data);
                                $('select[name="desa"]').empty();
                                $.each(data, function(key, values)
                                {
                                    $('select[name="desa"]').append('<option value="'+key+'">'+values+'</option>');
                                });
                            }
                        });
                        //console.log(kabupaten_id)
                    }
            });


        });
    </script>

    </body>
</html>
