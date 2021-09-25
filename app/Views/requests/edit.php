<?=$this->extend('layout/default'); ?>

<?=$this->section('css') ;?>
<style>
	.dataTables_filter {
		margin-bottom:10px;
	}

    .table>:not(caption)>*>* {
        border-bottom-width: 0;
        padding: .50rem; 
    }

    .alert-success{
        color: #155724;
        background-color: #d4edda;
        border-color: #c3e6cb;
        padding:15px;
        border-radius: 3px;
    }

    .alert-error{
        color: #842029;
        background-color: #f8d7da;
        border-color: #f5c2c7;
        padding:15px;
        border-radius: 3px;
    }


    .alert-x {
        float:right;
        cursor: pointer;
    }

    #serial_error {
        color: red;
        font-size: .90em;
        display: none;
    }
</style>

</script>
<?=$this->endSection(); ?>

<?=$this->section('content'); ?>
    <div id="alert_note"></div>
<h1 class="h3 mb-3">Update Request # <?=$request->id;?></h1>
<div class="row">
	<div class="col-lg-12 col-sm-12">
		<div class="card card-default">
			<div class="card-body">
                 
                <div class="px-2 d-flex">
                    <div class="flex-grow-1 ">
                        <p><strong>Request Details</strong></p>
                    </div>
                </div>
                <form method="POST" id="formRequest">  
                    <div class="row">
                        <div class="col-lg-6">
                            <table class="table" id="tableRequest">
                                <tbody>
                                    <tr>
                                        <td width="30%"><strong>Requested By:</strong></td>
                                        <td  width="70%">
                                        <input type="text" id="requestor" name="requestor" class="form-control w-75" value="<?=$request->requestor?>" required/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Branch Group</strong></td>
                                        <td>
                                        <select class="form-select" name="branch">
                                            <option value="<?=$request->branch?>"><?=$request->branch?></option>
                                            <?php foreach(get_gw_branches() as $key => $value): ?>
                                                <?php if($request->branch != $value): ?>
                                                    <option value="<?=$value?>"><?=$value?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
								        </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Department</strong></td>
                                        <td>
                                            <select class="form-select" name="department">
                                                <option value="<?=$request->department?>"><?=$request->department?></option>
                                                <?php foreach(get_gw_departments() as $key => $value): ?>
                                                    <?php if($request->department != $value): ?>
                                                        <option value="<?=$value?>"><?=$value?></option>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Category:</strong></td>
                                        <td>
                                            <select id="category" class="form-select" name="category">
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Priority</strong></td>
                                        <td>
                                        <select class="form-select" id="priority" name="priority">
                                            <option value="<?=$request->priority?>"><?=$request->priority?></option>
                                            <?php foreach(get_gw_priorities() as $key => $value): ?>
                                                <?php if($request->priority != $value): ?>
                                                    <option value="<?=$value?>"><?=$value?></option>
                                                <?php endif;?>
                                            <?php endforeach;?>    
                                        </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top"><strong>Description</strong></td>
                                        <td><textarea name="description" id="description" rows="3" class="form-control"  required><?=$request->description;?></textarea></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Search Tag</strong></td>
                                        <td>
                                             <input type="text" name="search_tag" id="search_tag" class="form-control devInput" value="<?=$request->search_tag?>" required />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Status</strong></td>
                                        <td>
                                            <select class="form-select" name="status">
                                            <option value="Not yet started" <?=$request->status == 'Not yet started' ? 'selected' : ''?>>Not yet started</option>
                                            <option value="Started" <?=$request->status == 'Started' ? 'selected' : ''?>>Started</option>
                                            <option value="In-progress" <?=$request->status == 'In-progress' ? 'selected' : ''?>>In-progress</option>
                                            <option value="For Confirmation" <?=$request->status == 'For Confirmation' ? 'selected' : ''?>>For Confirmation</option>
                                            <option value="For Follow-up" <?=$request->status == 'For Follow-up' ? 'selected' : ''?>>For Follow-up</option>
                                            <option value="For PO Creation" <?=$request->status == 'For PO Creation' ? 'selected' : ''?>>For PO Creation</option>
                                            <option value="For Request" <?=$request->status == 'For Request' ? 'selected' : ''?>>For Request</option>
                                            <option value="For Approval" <?=$request->status == 'For Approval' ? 'selected' : ''?>>For Approval</option>
                                            <option value="For Allocation" <?=$request->status == 'For Allocation' ? 'selected' : ''?>>For Allocation</option>
                                            <option value="For Delivery" <?=$request->status == 'For Delivery' ? 'selected' : ''?>>For Delivery</option>
                                            <option value="For Verification" <?=$request->status == 'Verification' ? 'selected' : ''?>>For Verification</option>
                                            <option value="For Assessment" <?=$request->status == 'For Assessment' ? 'selected' : ''?>>For Assessment</option>
                                            <option value="For Immediate Action" <?=$request->status == 'For Immediate Action' ? 'selected' : ''?>>For Immediate Action</option>
                                            <option value="With PO" <?=$request->status == 'With PO' ? 'selected' : ''?>>With PO</option>
                                            <option value="Ordered" <?=$request->status == 'Ordered' ? 'selected' : ''?>>Ordered</option>
                                            <option value="Monitoring" <?=$request->status == 'Monitor' ? 'selected' : ''?>>Monitoring</option>
                                            <option value="Suspend" <?=$request->status == 'Suspend' ? 'selected' : ''?>>Suspend</option>
                                            <option value="For Schedule" <?=$request->status == 'For Schedule' ? 'selected' : ''?>>For Schedule</option>
                                            <option value="Scheduled" <?=$request->status == 'Scheduled' ? 'selected' : ''?>>Scheduled</option>
                                            <option value="Delivered" <?=$request->status == 'Delivered' ? 'selected' : ''?>>Delivered</option>
                                            <option value="Recommend external solution" <?=$request->status == 'Recommend external solution' ? 'selected' : ''?>>Recommend ext solution</option>
                                            <option value="Modified" <?=$request->status == 'Modified' ? 'selected' : ''?>>Modified</option>
                                        </td>
                                    </tr>   
                                </tbody>
                            </table>
                        </div>

                        
                    </div>
                    <hr>
               
                    <div class="px-2 d-flex">
                        <div class="flex-grow-1 "></div>
                        <div class="px-2">
                            <a class="btn btn-md btn-success align-middle" id="submit"><i class="align-middle" data-feather="save"></i> Save</a>
                            <input type="hidden" id="request_id" name="request_id" value="<?=$request->id?>">
                            <input type="hidden" id="subject" name="subject" value="<?=$request->subject?>">
                        </div>
                    </div>
                </form>
			</div> 
		</div>
	</div>
</div>

<?=$this->endSection(); ?>

<?=$this->section('js'); ?>
<script>
 $(document).ready(function() {

    const alert_note = function(type, message){
        let alert_color = "";
        let request_id = $('#request_id').val();
        let url = window.location.pathname; 

        switch (type){
            case 'error': alert_color = 'alert-error'; break;
            case 'success': alert_color = 'alert-success'; break;
            default:  alert_color = 'alert-primary';
        }
        
        $("#alert_note").append("<div class='alert "+ alert_color + "' role='alert'>" + message + "<a style='float:right' href='<?=base_url("view-request")?>/"+request_id+"'> Click here to view </a></div><br>");
    
        
    }

    const comboSubject =  function(){ 
       $('#subject').ready(function() {
        var subject = $('#subject').val();
        var category = $('#category').val();
    

        $.get("<?=base_url('load-category/'.$request->id)?>", function(result) {
            let options = '';
            var data = jQuery.parseJSON(result);

            switch(data.subject) {
                case 'Task': 
                        options  = `
                            <option value='Support - Onsite' `+(data.category == 'Support - Onsite' ? 'selected' : '')+`>Support - Onsite</option>
                            <option value='Support - Remote' `+(data.category == 'Support - Remote' ? 'selected' : '')+`>Support - Remote</option>
                            <option value='Device - Installation' `+(data.category == 'Device - Installation' ? 'selected' : '')+`>Device - Installation</option>
                            <option value='Software - Installation' `+(data.category == 'Software - Installation' ? 'selected' : '')+`>Software - Installation</option>
                            <option value='Item Deployment' `+(data.category == 'Item Deployment' ? 'selected' : '')+`>Item Deployment</option>
                            <option value='Email Accounts' `+(data.category == 'Email Accounts' ? 'selected' : '')+`>Email Accounts</option>
                        `;
                        break;
                
                case 'Purchase' : 
                        options  = `
                            <option value="IT-Office Equipment" `+(data.category == 'IT-Office Equipment' ? 'selected' : '')+`>Office Equipment</option>
                            <option value="IT-Network Device" `+(data.category == 'IT-Network Device' ? 'selected' : '')+`>IT-Network Device</option>
                            <option value="IT-Miscellaneous" `+(data.category == 'IT-Miscellaneous' ? 'selected' : '')+`>IT-Miscellaneous</option>
                            <option value="IT-Peripherals" `+(data.category == 'IT-Peripherals' ? 'selected' : '')+`>IT-Peripherals</option>
                            <option value="IT-End User Device" `+(data.category == 'IT-End User Device' ? 'selected' : '')+`>IT-End User Device</option>
                            <option value="IT-Tools" `+(data.category == 'IT-Tools' ? 'selected' : '')+`>IT-Tools</option>
                            <option value="IT-License Subscription" `+(data.category == 'IT-License Subscription' ? 'selected' : '')+`>IT-License Subscription</option>
                            <option value="IT-Security Devices" `+(data.category == 'IT-Security Devices' ? 'selected' : '')+`>IT-Security Devices</option>

                        `;
                        break;

                default:
                        options = `<option value="Others">Others</option>`;
                        break;
                }
                $('#category').empty().append(options);
        });
      
        
        

       
        //alert('TEST');
        });
   }

    const EditRequest = function(){
         let url = window.location.href;
         let post_data = $('#formRequest').serialize();
        
         if(post_data != ''){
             $.post(url, post_data, function(data){
    
                 if(data == 'true'){
                     alert_note('success', 'Update Successful!');
                     $("#formRequest").load(location.href + " #formRequest" );
                     $("#subject").load( location.href + " #subject",function(){
                       comboSubject();
                    }); 
                 } else {
                     alert_note('error', 'Error Occured');
                 }
             });
         } else {
            alert_note('error', 'Error Occured');
         }
    }
   
     $("#submit").click(function(){
         EditRequest();
        
     }); 
 
 
     comboSubject();
     
 });
 </script>
 <?=$this->endSection(); ?>

