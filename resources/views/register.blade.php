<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloundflare.com/ajax/libs/font-awesome/5.14.0/css/all.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style_text.css') }}">
    <title>Registration</title>
</head>
<body>

<div class="cont">
    <div class="form sign-in" style="margin-left: 5%;">
        <div>
            <form action="{{url('/')}}" method="post" enctype="multipart/form-data">
                @csrf

<div class="cont">
    <div class="form sign-in" style="margin-left: 5%;">
        <div style="margin-bottom: 5%;">
            <div class="dropArea" style="float: left;" id="drop_area">

                <div class="image-upload">
                    <label for="file-input" class="addImgbtn">
                        <img src="{{ asset('pic/asset-01.png') }}" alt="" onerror="this.style.display='none';" id="img"/>
                    </label>
                    <input id="file-input" type="file" name="img_path" class="form-control" />
                </div>
                
                </div>
            </div>
            <div style="width: 60%; float: right; margin-top: 5%; height: 100px;">
                <h1 class="regis-text">REGISTRATION</h1>
            </div>
        </div>
    </div>
</div> 
<!--end pic-->

                <div class="form-group">
                    <div style="width: 50%; height: 100px; float: left; margin-bottom: 15px;">
                        <label for="fname">
                            FIRST NAME
                        </label>
                        <input type="text" name="fname" class="form-control" style="width: 90%;" />
                    </div>
                    <div style="width: 50%; height: 100px; float: right; margin-bottom: 15px;">
                        <label for="lname">
                            <span>LAST NAME</span>
                        </label>
                        <input type="text" name="lname" class="form-control" style="width: 90%;" />
                        
                    </div>
                </div>
                <div class="form-group">
                    <label for="username">
                        <span>USERNAME</span>
                    </label>
                    <input type="text" name="username" class="form-control" />
                    
                </div>
                <div class="form-group">
                    <label for="email">
                        <span>EMAIL</span>
                    </label>
                    <input type="text" name="email" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="tel">
                        <span>PH. NUMBER</span>
                    </label>
                    <input type="text" name="tel" class="form-control" />
                </div>

                

                <div class="form-group">
                <!-- <div style="width: 60%; float: left; margin-top: 2%;">  
                    <img style="width: 70%;" src="{{ asset('pic/asset-02.png') }}">
                </div> -->
                <div style="width: 40%; float: right; margin-top: 4%;">
                    <button type="submit" class="button">
                        <img style="width: 100%;" src="{{ asset('pic/asset-03.png') }}">
                    </button>
                </div>
                
            </div>
            </form>
            </div>
            
        </div>   
    </div>

<script type="text/javascript">
    // dragArea = document.getElementById('drop_area');
    img = document.getElementById('img');
    Extensions = ['image/png', 'image/gif', 'image/jpeg', 'image/jpg'];
    let fileName;

    document.getElementById('file-input').addEventListener('change', function(e){
        filename = this.files[0];
        checkExtension();
    });
    function checkExtension(e){
        if (Extensions.indexOf(filename.type) !== -1){
            img.setAttribute('src', URL.createObjectURL(filename));
            img.style.display='block';
            // console.log('valid extension');
        } else {
            alert('This File is not Valid. Upload jpg, jpeg, png, or gif only.');
            // console.log('not valid extension');
        }
    }
</script>
</body>
</html>