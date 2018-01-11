<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>BJS CodeDeploySample</title>
  <style>
    body {
      color: #ffffff;
      background-color: #0188cc;
      font-family: Arial, sans-serif;
      font-size: 14px;
    }
    
    h1 {
      font-size: 500%;
      font-weight: normal;
      margin-bottom: 0;
    }
    
    h2 {
      font-size: 200%;
      font-weight: normal;
      margin-bottom: 0;
    }
  </style>
</head>
<body>
  <div align="center">
    <h1>BJS CodeDeploy CICD with Jenkins - V5</h1>
    <h2>Github + ALB + CodeDeploy + Jenkins</h2> 
    <h2>AWS BJS CodeDeploy Demo</h2>
    <p>Please refer this link for more details. <a href="http://aws.amazon.com/documentation/codedeploy">AWS CodeDeploy Document</a>.</p>
    <p>danrongm@amazon.com</a>.</p>
  </div>

  <div align="center">
  <?php
    $instance_id = @file_get_contents("http://instance-data/latest/meta-data/instance-id");
    $zone = @file_get_contents("http://169.254.169.254/latest/meta-data/placement/availability-zone");
  ?>
    </br>
    </br>    
    <h2>EC2 Instance ID: <?php echo $instance_id; ?></h2>
    <h2>EC2 Zone: <?php echo $zone; ?></h2>    
  </div>    
</body>
</html>