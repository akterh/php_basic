<div class="form-group">
                <label for="gender">Gender</label>
                <div class="form-group">
                        <label for="gender">fruits name</label>
                        <select class="form-control" name="fruits[]" id="fruits" multiple>
                            <option value="" disabled selected >select item</option>
                                        <!-- <option>mango</option>
                                        <option>apple</option>
                                        <option>orange</option> -->
                                        <?php 
                                            displayOption($fruits);
                                                
                                            
                                        ?>
                        </select>
            
               </div>
</div>               
            <button class="btn btn-success" type="submit">Submit</button>c