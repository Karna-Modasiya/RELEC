tinymce.init({
	/* replace textarea having class .tinymce with tinymce editor */
	selector: "textarea.tinymce",
	
	video_template_callback: function(data) {
		return '<video width="' + data.width + '" height="' + data.height + '"' + (data.poster ? ' poster="' + data.poster + '"' : '') + ' controls="controls">\n' + '<source src="' + data.source + '"' + (data.sourcemime ? ' type="' + data.sourcemime + '"' : '') + ' />\n' + (data.altsource ? '<source src="' + data.altsource + '"' + (data.altsourcemime ? ' type="' + data.altsourcemime + '"' : '') + ' />\n' : '') + '</video>';
	  },

	/* theme of the editor */
	theme: "modern",
	skin: "lightgray",
	
	/* width and height of the editor */
	width: "100%",
	
	/* display statusbar */
	statubar: true,
	
	/* plugin */
	plugins: [
		"advlist autolink link image lists charmap print preview hr anchor pagebreak",
		"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
		"save table contextmenu directionality emoticons template paste textcolor"
	],

	/* toolbar */
	toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",
	
	/* style */
	style_formats: [
		{title: "Headers", items: [
			{title: "Header 1", format: "h1"},
			{title: "Header 2", format: "h2"},
			{title: "Header 3", format: "h3"},
			{title: "Header 4", format: "h4"},
			{title: "Header 5", format: "h5"},
			{title: "Header 6", format: "h6"}
		]},
		{title: "Inline", items: [
			{title: "Bold", icon: "bold", format: "bold"},
			{title: "Italic", icon: "italic", format: "italic"},
			{title: "Underline", icon: "underline", format: "underline"},
			{title: "Strikethrough", icon: "strikethrough", format: "strikethrough"},
			{title: "Superscript", icon: "superscript", format: "superscript"},
			{title: "Subscript", icon: "subscript", format: "subscript"},
			{title: "Code", icon: "code", format: "code"}
		]},
		{title: "Blocks", items: [
			{title: "Paragraph", format: "p"},
			{title: "Blockquote", format: "blockquote"},
			{title: "Div", format: "div"},
			{title: "Pre", format: "pre"}
		]},
		{title: "Alignment", items: [
			{title: "Left", icon: "alignleft", format: "alignleft"},
			{title: "Center", icon: "aligncenter", format: "aligncenter"},
			{title: "Right", icon: "alignright", format: "alignright"},
			{title: "Justify", icon: "alignjustify", format: "alignjustify"}
		]}
	],
	image_title: true,
	/* enable automatic uploads of images represented by blob or data URIs*/
	automatic_uploads: true,
	/*
	  URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
	  images_upload_url: 'postAcceptor.php',
	  here we add custom filepicker only to Image dialog
	*/
	file_picker_types: 'image',
	/* and here's our custom image picker*/
	file_picker_callback: function (cb, value, meta) {
	  var input = document.createElement('input');
	  input.setAttribute('type', 'file');
	//   input.setAttribute('accept', 'image/*');
  
	  /*
		Note: In modern browsers input[type="file"] is functional without
		even adding it to the DOM, but that might not be the case in some older
		or quirky browsers like IE, so you might want to add it to the DOM
		just in case, and visually hide it. And do not forget do remove it
		once you do not need it anymore.
	  */
  
	  input.onchange = function () {
		var file = this.files[0];
  
		var reader = new FileReader();
		reader.onload = function () {
		  /*
			Note: Now we need to register the blob in TinyMCEs image blob
			registry. In the next release this part hopefully won't be
			necessary, as we are looking to handle it internally.
		  */
		  var id = 'blobid' + (new Date()).getTime();
		  var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
		  var base64 = reader.result.split(',')[1];
		  var blobInfo = blobCache.create(id, file, base64);
		  blobCache.add(blobInfo);
  
		  /* call the callback and populate the Title field with the file name */
		  cb(blobInfo.blobUri(), { title: file.name });
		};
		reader.readAsDataURL(file);
	  };
  
	  input.click();
	},
	content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
});

let vid = document.getElementById('Video');
var img = document.getElementById("Image");


function validatevid(){
    
    var filePath = vid.value;
    // Allowing file type
    var allowedExtensions = /(\.mp3|\.mp4|\.mov|\.wmv|\.flv|\.avi|\.avchd|\.webm|\.mkv)$/;

    if (allowedExtensions.exec(filePath)) {
        vid.classList.remove(".error");
        return 1;
    }
    else
    {
        vid.value = "";
        vid.classList.add('.error');
    }
}

function validateimg(){
    
    var filePath = img.value;
    // Allowing file type
    var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/;

    if (allowedExtensions.exec(filePath)) {
        img.classList.remove('.error');
        return 1;
    }
    else
    {
        img.value = "";
        img.classList.add('.error');
    }
}
function vidchange(){
	var type =  document.getElementById('type');
	var video =  document.getElementById('Video');
	var viddiv =  document.getElementById('viddiv');
	var url =  document.getElementById('Url');
	var urldiv =  document.getElementById('urldiv');

	if(type.value == "Video"){
		video.required = true;
		viddiv.style.display = "block";
		urldiv.style.display = "none";
		url.required = false;
	}
	else if(type.value == "Url") {
		video.required = false;
		viddiv.style.display = "none";
		urldiv.style.display = "block";
		url.required = true;
	}
}
function AddCourse(){
    var desc = tinymce.get("Desc").getContent();
    var content = tinymce.get("Learn").getContent();

	
    document.getElementById("Desc").innerHTML = desc;
    document.getElementById("Learn").innerHTML = content;
}


