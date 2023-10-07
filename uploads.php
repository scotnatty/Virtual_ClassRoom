
<?php include ('heads.php');?>

<body>

        

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header" align='center'>Add Materials</h3>
					
                </div>
				
				<form action= "?" method= "post" enctype="multipart/form-data">
                    <p align="center"><input type="file" name="file"/></p>
                    <p align="center"><input type="submit" name="upload" value="upload materials"></p>
</form>
            
                
                <!-- /.col-lg-12 -->
				
				
				<hr/>
				
                    
                                    <tbody>
									
                                        <tr>
										<?php 
											require 'conn.php';
											$bool = false;
												while($row = $query->fetch_array()){
													$candidate_id=$row['email_id'];
										?>
											
                                            
                                
        
										
                                            <?php }?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
              
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->



    </div>
    <!-- /#wrapper -->

    <?php include ('allfoot.php');?>

</body>

</html>

