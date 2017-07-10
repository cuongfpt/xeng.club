<html>
<head>
    <?php $this->load->view('site/head') ?>
</head>
<body>
     <?php $this->load->view('site/header') ?>
     <?php $this->load->view($temp, $this->data); ?>
     <?php $this->load->view('site/footer') ?>
</body>
</html>