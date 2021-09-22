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
<h1 class="h3 mb-3">Add Task</h1>
<div class="row">
	<div class="col-lg-12 col-sm-12">
		<div class="card card-default">
			<div class="card-body">
                 
                <div class="px-2 d-flex">
                    <div class="flex-grow-1 ">
                        <p><strong>Task Details</strong></p>
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
                                        <input type="text" id="requestor" name="requestor" class="form-control w-75" required/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Branch Group</strong></td>
                                        <td>
                                            <select class="form-select" id="branch" name="branch">
                                                <option value="NISSAN-MANTRADE">NISSAN-MANTRADE</option>
                                                <option value="NISSAN-OTIS">NISSAN-OTIS</option>
                                                <option value="NISSAN-PASAY">NISSAN-PASAY</option>
                                                <option value="NISSAN-BGC">NISSAN-BGC</option>
                                                <option value="NISSAN-ABADSANTOS">NISSAN-ABADSANTOS</option>
                                                <option value="NISSAN-TALISAY">NISSAN-TALISAY</option>
                                                <option value="NISSAN-VRAMA">NISSAN-VRAMA</option>
                                                <option value="NISSAN-SMSEASIDE">NISSAN-SMSEASIDE</option>
                                                <option value="NISSAN-MATINA">NISSAN-MATINA</option>
                                                <option value="NISSAN-TAGUM">NISSAN-TAGUM</option>
                                                <option value="NISSAN-PALAWAN">NISSAN-PALAWAN</option>
                                                <option value="MITSUBISHI-TALISAY">MITSUBISHI-TALISAY</option>
                                                <option value="MITSUBISHI-MATINA">MITSUBISHI-MATINA</option>
                                                <option value="MITSUBISHI-SUCAT">MITSUBISHI-SUCAT</option>
                                                <option value="SUZUKI-PALAWAN">SUZUKI-PALAWAN</option>
                                                <option value="SUZUKI-SANPABLO">SUZUKI-SANPABLO</option>
                                                <option value="SUZUKI-SANPABLO">SUZUKI-SANPABLO</option>
                                                <option value="SUZUKI-STO TOMAS">SUZUKI-STO TOMAS</option>
                                                <option value="FOTON-TALISAY">FOTON-TALISAY</option>
                                                <option value="FUSO-LIPA">FUSO-LIPA</option>
                                                <option value="HONDA-FAIRVIEW">HONDA-FAIRVIEW</option>
                                                <option value="HONDA-MARCOS HIGHWAY">HONDA-MARCOS HIGHWAY</option>
                                                <option value="GEELY-ASIANA">GEELY-ASIANA</option>
                                                <option value="GEELY-SANTAROSA">GEELY-SANTAROSA</option>
                                                <option value="GEELY-CEBU">GEELY-CEBU</option>
                                                <option value="GEELY-LIPA">GEELY-LIPA</option>
                                                <option value="GEELY-PAMPANGA">GEELY-PAMPANGA</option>
                                                <option value="GEELY-TARLAC">GEELY-TARLAC</optiom>
                                                <option value="GEELY-NAGA">GEELY-NAGA</option>
                                                <option value="MG-MARILAO">MG-MARILAO</option>
                                                <option value="MG-PASAY">MG-PASAY</option>
                                                <option value="MG-SANPABLO">MG-SANPABLO</option>
                                                <option value="MG-BOHOL">MG-BOHOL</option>
                                                <option value="KIA-MANDAUE">KIA-MANDAUE</option>
                                                <option value="KIA-TALISAY">KIA-TALISAY</option>
                                                <option value="KIA-STO TOMAS">KIA-STO TOMAS</option>
                                                <option value="KIA-GORORDO">KIA-GORORDO</option>
                                                <option value="KIA-SANPABLO">KIA-SANPABLO</option>
                                                <option value="BMW-LAHUG">BMW-LAHUG</option>
                                                <option value="BMW-NRA">BMW-NRA</option>
                                                <option value="ISUZU-LUCENA">ISUZU-LUCENA</option>
                                                <option value="MARKANE">MARKANE</option>
                                                <option value="NAGA">NAGA</option>
                                                <option value="PEUGEOT-PASIG">PEUGEOT-PASIG</option>
                                                <option value="BACOOR-MOLINO">BACOOR-MOLINO</option>
                                                <option value="SUBARU-PAMPANGA">SUBARU-PAMPANGA</option>
                                                <option value="GATEWAY">GATEWAY</option>
                                                <option value="STOCK">STOCK</option>
                                                <option value="OTHERS">OTHERS</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Department</strong></td>
                                        <td>
                                        <select class="form-select" id="department" name="department">
                                            <option value="IT">IT</option>
                                            <option value="HR">HR</option>
                                            <option value="SERVICE-PARTS">PARTS</option>
                                            <option value="SERVICE">SERVICE</option>
                                            <option value="BRP">BRP</option>
                                            <option value="SALES">SALES</option>
                                            <option value="ACCTG">ACCTG</option>
                                            <option value="LTO">LTO</option>
                                            <option value="ADMIN">ADMIN</option>
                                            <option value="INSURANCE">INSURANCE</option>
                                            <option value="CRU">CRU</option>
                                            <option value="MARKETING">MARKETING</option>
                                            <option value="CRM-ENCODING">CRM-ENCODING</option>
                                            <option value="GENERAL">GENERAL</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                         <input type="hidden" name="subject" id="subject" value="Task">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Category:</strong></td>
                                        <td>
                                            <select class="form-select" id="category" name="category">
                                                <option value="Office Supply">Office Supply</option>
                                                <option value="IT - Network Equipment">IT - Network Equipment</option>
                                                <option value="IT - Consumables">IT - Consumables</option>
                                                <option value="IT - Service Tool">IT - Service Tool</option>
                                                <option value="IT - Peripherals">IT - Peripherals</option>
                                                <option value="End-user Device">End-user Device</option>
                                                <option value="Internet/LAN">Internet/LAN</option>
                                                <option value="DealerPro/Pentana">DealerPro/Pentana</option>
                                                <option value="CRM">CRM</option>
                                                <option value="DMS/BRP">DMS/BRP</option>
                                                <option value="PC Problem">PC Problem</option>
                                                <option value="Telephone/Trunkline">Telephone/Trunkline</option>
                                                <option value="System">System</option>
                                                <option value="Accounts">Accounts</option>
                                                <option value="IT - Warranty Claim">IT - Warranty Claim</option>
                                                <option value="Item Deployment">Item Deployment</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Priority</strong></td>
                                        <td>
                                        <select class="form-select" id="priority" name="priority">
                                            <option value="Low">Low</option>
                                            <option value="Normal">Normal</option>
                                            <option value="Important">Important</option>
                                            <option value="Urgent">Urgent</option>
                                            <option value="Critical">Critical</option>
                                        </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top"><strong>Description</strong></td>
                                        <td><textarea name="description" id="description" rows="3" class="form-control" required></textarea></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Search Tag</strong></td>
                                        <td>
                                             <input type="text" name="search_tag" id="search_tag" class="form-control devInput"  required />
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

        switch (type){
            case 'error': alert_color = 'alert-error'; break;
            case 'success': alert_color = 'alert-success'; break;
            default:  alert_color = 'alert-primary';
        }
        
        $("#alert_note").append("<div class='alert "+ alert_color + "' role='alert'>" + message + "</div><br>");
    }


    const AddNewRequest = function(){
        let url = window.location.href;
        let post_data = $('#formRequest').serialize();
        
        if(post_data != ''){
            $.post(url, post_data, function(data){
    
                if(data == 'true'){
                    alert_note('success', 'Record Successful');
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
        AddNewRequest();
       
    }); 
 });
 </script>
 <?=$this->endSection(); ?>

