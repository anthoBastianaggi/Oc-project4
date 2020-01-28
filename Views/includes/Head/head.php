<!-- Meta Tags -->
<meta charset="UTF-8"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=0, maximum-scale=1, initial-scale=1.0, maximum-scale=1">
<meta name="author" content="<?= WEBSITE_AUTHOR?>">
<meta name="description" content="<?= WEBSITE_DESCRIPTION?>" />
<meta name=”keywords” content="<?= WEBSITE_KEYWORDS?>"/>
<meta name="Reply-to" content="<?= WEBSITE_AUTHOR_MAIL?>">
<meta name="Copyright" content="<?= WEBSITE_AUTHOR?>">
<meta name="Language" content="<?= WEBSITE_LANGUAGE?>">

<!-- Open Graph tags -->
<meta property="og:type"              content="website" />
<meta property="og:url"               content="<?= WEBSITE_FACEBOOK_URL?>" />
<meta property="og:title"             content="<?= WEBSITE_FACEBOOK_NAME?>" />
<meta property="og:description"       content="<?= WEBSITE_FACEBOOK_DESCRIPTION?>" />
<meta property="og:image"             content="<?= WEBSITE_FACEBOOK_IMAGE?>" />

<!-- CSS Styles -->
<link href="Public/lib/font-awesome/fontawesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="Public/styles/css/bootstrap.css"/>
<link rel="stylesheet" href="Public/styles/css/styles.css"/>

<!-- Javascript -->
<script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
<script type="text/javascript">
    tinymce.init({
        selector: "#contentTicket",
        height: 400,
        toolbar: 'fontsizeselect',
        fontsize_formats: '8pt 10pt 12pt 14pt 18pt 24pt 36pt'
    });
</script>