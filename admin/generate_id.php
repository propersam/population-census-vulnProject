if ($generated_id == '') {
                
                    echo "

                        <div class='form-group col-12 col-md-4 mt-2'>
                            <input type='submit' name='generate' 
                            value='Generate family unique Id' class='btn btn-primary'>
                                  
                        </div>
                    
                        
                        
                            ";
                   
                    
                        } else {

                            register_family($generated_id);
                            
                            echo "
                            <div class='form-group col-12 col-md-4 mt-2'>
                                <input type='submit' name='generate' 
                                value='GENERATED USER ID: " .strtoupper($generated_id) ."' class='btn btn-danger' disabled>
                                    
                            </div>
                        
                            
                            <div class='form-group col-md-12 mt-5'>
                                <input type='submit' name='register_family' 
                                value='Register Family' class='btn btn-primary'>
                            </div>

                            ";

                            
                            
                        }


                        ?>