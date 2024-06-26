<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editor’s Portal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />
  <style>
    
    nav img {
height: auto;
margin: 0px;
}

nav {
background-color: rgb(255, 255, 255);
color: #000;
box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}

.nav-link {
font-size: 1.2em;
margin-right: 10px;
color: #000;
}
    

    .container-main {
      padding: 20px;
    }

    .meta-data, .row{
      border-left: 2px solid #ffc107;
      padding-left: 15px;
    }
    .badge {
      background-color: #e7b317;
      color: #fcf7f7;
    }

    #editor {
      height: 300px;
      max-width: 700px;
    }

   

    .btn-group {
      position: absolute; 
      bottom: 20px; 
      right: 20px; 
      display: flex;
      gap: 10px; 
    }

    @media (min-width: 768px) and (max-width: 1080px) {
      .btn-group {
        position: absolute; 
        bottom: 20px; 
        right: 20px; 
        display: flex;
        gap: 10px; 
      }
      .btn {
        font-size: 12px;
      
      }

    }

    @media (max-width: 768px) {
      .btn-group {
        position: relative; 
        bottom: 20px; 
        right: 20px; 
        display: flex;
        gap: 10px; 
        margin-top: 20px;
        margin-left: 70px;
        margin-right: 70px;
      }
      .btn {
        font-size: 16px;
        display: flex;
        align-content: center;
      }
      .meta-data, .row{
      border-left: none;
      padding-left: 15px;
      
    }
    .row{
      border-left:  2px solid #ffc107; 
      padding-left: 15px;

    }
  }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-md bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <h1 class="col justify-content-center align-items-start"
                style="font-size: 30px; font-family: 'Times New Roman', Times, serif; margin-bottom: 0px;"><img
                    src="logo_no_name_Fotor.png" style="max-width: 100px; color: black;"> Editor's Portal</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbacde r-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb- mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Opinion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Literary</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sports</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>

                </li>
            </ul>
        </div>
    </div>
</nav>
  <div class="container container-main">
   
    <div class="row">
      <div class="col-md-7">
        <h5 style="margin: auto; text-align: left;">
          <span class="badge text-bg-secondary">Article Content </span> </h5>
        
        <div class="form-group">
          <label for="header">Header</label>
          <input type="text" class="form-control" id="header" placeholder="Place Header Here">
        </div>
        <div class="form-group">
          <label for="header">Sub-header</label>
          <input type="text" class="form-control" id="Sub-header" placeholder="Place Sub-header Here">
        </div>
        
        <!-- <div class="form-group">
          <label for="body">Body</label>
          <textarea class="form-control" id="body"
            rows="10">Lorem ipsum dolor sit amet consectetur. Tortor vitae ultricies et tellus ultrices. Viverra mauris ultrices arcu tristique risus condimentum venenatis feugiat at. Nisl eu suscipit lorem nulla sed ullamcorper. Aliquam diam vitae quis mi lacus eu aliquam leo. Velit hac fermentum arcu at a adipiscing sed. Porttitor a blandit semper ipsum aliquam. A diam et et egestas feugiat vitae.</textarea>
        </div> -->
        <div id="editor">
        </div>
      </div>

      <div class="col-md-4 meta-data">
        <div class="form-group">
          <label for="tags">Tags</label>
          <input type="text" class="form-control" id="tags" placeholder="Campus News">
        </div>
        <div class="form-group">
          <label for="journalists">Journalists</label>
          <select class="form-control" id="journalists">
            <option>Select Journalist</option>
            <!-- Options can be added here -->
          </select>
        </div>
        <div class="form-group">
          <label for="bannerImage">Banner Image</label>
          <input type="file" class="form-control-file" id="bannerImage">
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="setAsBannerArticle">
          <label class="form-check-label" for="setAsBannerArticle">Set as Banner Article?</label>
        </div>
        <div class="form-group">
          <label for="bannerImage">In-Article Image</label>
          <input type="file" class="form-control-file" id="bannerImage">
        </div>
        
      </div>
    </div>
  </div>
  
  <div class="btn-group">
    <button class="btn btn-outline-primary">Preview Article Page</button>
    <button class="btn btn-outline-secondary">Save Draft</button>
    <button class="btn btn-primary">Publish Now</button>
  </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>
  <script>
    const quill = new Quill('#editor', {
      theme: 'snow'
    });
  </script>
</body>

</html>