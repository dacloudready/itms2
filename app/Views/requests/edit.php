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
                                            <option value="NISSAN-MANTRADE" <?=$request->branch == 'NISSAN-MANTRADE' ? 'selected' : ''?>>NISSAN-MANTRADE</option>
                                            <option value="NISSAN-OTIS" <?=$request->branch == 'NISSAN-OTIS' ? 'selected' : ''?>>NISSAN-OTIS</option>
                                            <option value="NISSAN-PASAY" <?=$request->branch == 'NISSAN-PASAY' ? 'selected' : ''?>>NISSAN-PASAY</option>
                                            <option value="NISSAN-BGC" <?=$request->branch == 'NISSAN-BGC' ? 'selected' : ''?>>NISSAN-BGC</option>
                                            <option value="NISSAN-ABADSANTOS" <?=$request->branch == 'NISSAN-ABADSANTOS' ? 'selected' : ''?>>NISSAN-ABADSANTOS</option>
                                            <option value="NISSAN-TALISAY" <?=$request->branch == 'NISSAN-TALISAY' ? 'selected' : ''?>>NISSAN-TALISAY</option>
                                            <option value="NISSAN-VRAMA" <?=$request->branch == 'NISSAN-VRAMA' ? 'selected' : ''?>>NISSAN-VRAMA</option>
                                            <option value="NISSAN-SMSEASIDE" <?=$request->branch == 'NISSAN-SMSEASIDE' ? 'selected' : ''?>>NISSAN-SMSEASIDE</option>
                                            <option value="NISSAN-MATINA" <?=$request->branch == 'NISSAN-MATINA' ? 'selected' : ''?>>NISSAN-MATINA</option>
                                            <option value="NISSAN-TAGUM" <?=$request->branch == 'NISSAN-TAGUM' ? 'selected' : ''?>>NISSAN-TAGUM</option>
                                            <option value="NISSAN-PALAWAN" <?=$request->branch == 'NISSAN-PALAWAN' ? 'selected' : ''?>>NISSAN-PALAWAN</option>
                                            <option value="MITSUBISHI-TALISAY" <?=$request->branch == 'MITSUBISHI-TALISAY' ? 'selected' : ''?>>MITSUBISHI-TALISAY</option>
                                            <option value="MITSUBISHI-MATINA" <?=$request->branch == 'MITSUBISHI-MATINA' ? 'selected' : ''?>>MITSUBISHI-MATINA</option>
                                            <option value="MITSUBISHI-SUCAT" <?=$request->branch == 'MITSUBISHI-SUCAT' ? 'selected' : ''?>>MITSUBISHI-SUCAT</option>
                                            <option value="SUZUKI-PALAWAN" <?=$request->branch == 'SUZUKI-PALAWAN' ? 'selected' : ''?>>SUZUKI-PALAWAN</option>
                                            <option value="SUZUKI-SANPABLO" <?=$request->branch == 'SUZUKI-SANPABLO' ? 'selected' : ''?>>SUZUKI-SANPABLO</option>
                                            <option value="SUZUKI-ALAMINOS" <?=$request->branch == 'SUZUKI-ALAMINOS' ? 'selected' : ''?>>SUZUKI-ALAMINOS</option>
                                            <option value="FOTON-TALISAY" <?=$request->branch == 'FOTON-TALISAY' ? 'selected' : ''?>>FOTON-TALISAY</option>
                                            <option value="FUSO-LIPA" <?=$request->branch == 'FUSO-LIPA' ? 'selected' : ''?>>FUSO-LIPA</option>
                                            <option value="HONDA-FAIRVIEW" <?=$request->branch == 'HONDA-FAIRVIEW' ? 'selected' : ''?>>HONDA-FAIRVIEW</option>
                                            <option value="HONDA-MARCOS HIGHWAY" <?=$request->branch == 'HONDA-MARCOS HIGHWAY' ? 'selected' : ''?>>HONDA-MARCOS HIGHWAY</option>
                                            <option value="GEELY-ASIANA" <?=$request->branch == 'GEELY-ASIANA' ? 'selected' : ''?>>GEELY-ASIANA</option>
                                            <option value="GEELY-SANTAROSA" <?=$request->branch == 'GEELY-SANTAROSA' ? 'selected' : ''?>>GEELY-SANTAROSA</option>
                                            <option value="GEELY-CEBU" <?=$request->branch == 'GEELY-CEBU' ? 'selected' : ''?>>GEELY-CEBU</option>
                                            <option value="GEELY-LIPA" <?=$request->branch == 'GEELY-LIPA' ? 'selected' : ''?>>GEELY-LIPA</option>
                                            <option value="GEELY-PAMPANGA" <?=$request->branch == 'GEELY-PAMPANGA' ? 'selected' : ''?>>GEELY-PAMPANGA</option>
                                            <option value="MG-PASAY" <?=$request->branch == 'MG-PASAY' ? 'selected' : ''?>>MG-PASAY</option>
                                            <option value="MG-SANPABLO" <?=$request->branch == 'MG-SANPABLO' ? 'selected' : ''?>>MG-SANPABLO</option>
                                            <option value="MG-BOHOL" <?=$request->branch == 'MG-BOHOL' ? 'selected' : ''?>>MG-BOHOL</option>
                                            <option value="KIA-MANDAUE" <?=$request->branch == 'KIA-MANDAUE' ? 'selected' : ''?>>KIA-MANDAUE</option>
                                            <option value="KIA-TALISAY" <?=$request->branch == 'KIA-TALISAY' ? 'selected' : ''?>>KIA-TALISAY</option>
                                            <option value="KIA-GORORDO" <?=$request->branch == 'KIA-GORORDO' ? 'selected' : ''?>>KIA-GORORDO</option>
                                            <option value="KIA-SANPABLO" <?=$request->branch == 'KIA-SANPABLO' ? 'selected' : ''?>>KIA-SANPABLO</option>
                                            <option value="BMW-LAHUG" <?=$request->branch == 'BMW-LAHUG' ? 'selected' : ''?>>BMW-LAHUG</option>
                                            <option value="BMW-NRA" <?=$request->branch == 'BMW-NRA' ? 'selected' : ''?>>BMW-NRA</option>
                                            <option value="MARKANE" <?=$request->branch == 'MARKANE' ? 'selected' : ''?>>MARKANE</option>
                                            <option value="NAGA" <?=$request->branch == 'NAGA' ? 'selected' : ''?>>NAGA</option>
                                            <option value="PEUGEOT-PASIG" <?=$request->branch == 'PEUGEOT-PASIG' ? 'selected' : ''?>>PEUGEOT-PASIG</option>
                                            <option value="BACOOR-MOLINO" <?=$request->branch == 'BACOOR-MOLINO' ? 'selected' : ''?>>BACOOR-MOLINO</option>
                                            <option value="STOCK" <?=$request->branch == 'STOCK' ? 'selected' : ''?>>STOCK</option>
                                            <option value="OTHERS" <?=$request->branch == 'OTHERS' ? 'selected' : ''?>>OTHERS</option>
								        </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Department</strong></td>
                                        <td>
                                        <select class="form-select" name="department">
                                            <option value="IT" <?=$request->department == 'IT' ? 'selected' : ''?>>IT</option>
                                            <option value="HR" <?=$request->department == 'HR' ? 'selected' : ''?>>HR</option>
                                            <option value="SERVICE-PARTS" <?=$request->department == 'SERVICE-PARTS' ? 'selected' : ''?>>PARTS</option>
                                            <option value="SERVICE" <?=$request->department == 'SERVICE' ? 'selected' : ''?>>SERVICE</option>
                                            <option value="BRP" <?=$request->department == 'BRP' ? 'selected' : ''?>>BRP</option>
                                            <option value="SALES" <?=$request->department == 'SALES' ? 'selected' : ''?>>SALES</option>
                                            <option value="ACCTG" <?=$request->department == 'ACCTG' ? 'selected' : ''?>>ACCTG</option>
                                            <option value="LTO" <?=$request->department == 'LTO' ? 'selected' : ''?>>LTO</option>
                                            <option value="ADMIN" <?=$request->department == 'ADMIN' ? 'selected' : ''?>>ADMIN</option>
                                            <option value="INSURANCE" <?=$request->department == 'INSURANCE' ? 'selected' : ''?>>INSURANCE</option>
                                            <option value="CRU" <?=$request->department == 'CRU' ? 'selected' : ''?>>CRU</option>
                                            <option value="MARKETING" <?=$request->department == 'MARKETING' ? 'selected' : ''?>>MARKETING</option>
                                            <option value="CRM-ENCODING" <?=$request->department == 'CRM-ENCODING' ? 'selected' : ''?>>CRM-ENCODING</option>
                                            <option value="GENERAL" <?=$request->department == 'GENERAL' ? 'selected' : ''?>>GENERAL</option>
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
                                            <option value="Low" <?=$request->priority == 'Low' ? 'selected' : ''?>>Low</option>
                                            <option value="Normal" <?=$request->priority == 'Normal' ? 'selected' : ''?>>Normal</option>
                                            <option value="Important" <?=$request->priority == 'Important' ? 'selected' : ''?>>Important</option>
                                            <option value="Urgent" <?=$request->priority == 'Urgent' ? 'selected' : ''?>>Urgent</option>
                                            <option value="Critical" <?=$request->priority == 'Low' ? 'selected' : ''?>>Critical</option>
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


    const EditRequest = function(){
         let url = window.location.href;
         let post_data = $('#formRequest').serialize();
        
         if(post_data != ''){
             $.post(url, post_data, function(data){
    
                 if(data == 'true'){
                     alert_note('success', 'Update Successful!');
                     $("#formRequest").load(location.href + " #formRequest");
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
 
 
     $('#subject').load(function() {
        var subject = $('#subject').val();
        let options = '';

        switch(subject) {
            case 'Task': 
                    options  = `
                        <option value="Support - Onsite">Support - Onsite</option>
                        <option value="Support - Remote">Support - Remote</option>
                        <option value="Device - Installation">Device - Installation</option>
                        <option value="Software - Installation">Software - Installation</option>
                        <option value="Item Deployment">Item Deployment</option>
                    `;
                    break;
            
            case 'Purchase' : 
                     options  = `
                        <option value="IT-Office Equipment">Office Equipment</option>
                        <option value="IT-Network Device">IT-Network Device</option>
                        <option value="IT-Miscellaneous">IT-Miscellaneous</option>
                        <option value="IT-Peripherals">IT-Peripherals</option>
                        <option value="IT-End User Device">IT-End User Device</option>
                        <option value="IT-Tools">IT-Tools</option>
                        <option value="IT-License Subscription">IT-License Subscription</option>
                        <option value="IT-Security Devices">IT-Security Devices</option>

                    `;
                    break;

            default:
                    options = `<option value="Others">Others</option>`;
                    break;
        }

        $('#category').empty().append(options);
        //alert(Category);
    });
     
 });
 </script>
 <?=$this->endSection(); ?>

