<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event[]|\Cake\Collection\CollectionInterface $events
 */
$this->assign('title','Event Management System');
?>
<style type="text/css">
    .editbtn, .deletebtn {
        display:none;
    }

    .savebtn,.deletebtn,.editbtn{
        margin: 10px;
    }
</style>
<script type="text/javascript" src="js/jquery-3.3.1.min"></script>
<div class="eventDetails form large-12 medium-12 columns">
    <?= $this->Form->create($event) ?>
    <fieldset>
        <legend style="text-align: center;"><?= __('Add Event Detail') ?></legend>
        <div class="row">
            <div class="large-12">
                <label for="name" class="large-4">Event Name<span style="color: red">*</span></label>
                <?= $this->Form->control('name',['label'=>false,'class'=>'large-8']);?>
            </div>
        </div>
        <?= $this->Form->control('description');?>
        <div class="large-12 columns" >
            <div class="large-6 columns">
                <?= $this->Form->control('start_date');?>
            </div>
            <div class="large-6 columns">
                <?= $this->Form->control('end_date');?>
            </div>
        </div>
        <?= $this->Form->control('organizer');?>

        <!-- RAVI0420: Button To Add new Row on table -->
        <div class="row">
            <input type="button" name="" value="Add New Ticket" id="add_new_ticket">
        </div>

        <!-- RAVI20180420: List All Tickets -->
        <div class="row" id="ticket_lists">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Ticket No</th>
                        <th>Price</th>
                        <th class="Action">Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
        </div>
    <div class="row" style="text-align: center;">
        <?= $this->Form->button(__('Save Event')) ?>
    </div>
    </fieldset>
    <?= $this->Form->end() ?>
</div>


<script type="text/javascript">
    $('document').ready(function(){
        var id = 1;
        
        $('#add_new_ticket').click(function(){
            var trlist = '<tr><td><input type="number" value="'+id+'" step="00001."></td><td><input type="number" name="event_details['+id+'][ticket_no]" step="00.01"></td><td><input type="number" name="event_details['+id+'][ticket_price]" step="00.01"></td><td><input type="button" class="savebtn" value="Save" onclick="saveMe(this);"><input type="button" class="editbtn" value="Edit"  onclick="editMe(this);"><input type="button" class="deletebtn" value="Delete" class="deletebtn" onclick="removeMe(this);"></td></tr>';
            if ($('table tbody').prepend(trlist)){
                id = id+1;
                //alert(id);
            }
        });
    });
</script>

<!-- RAVI20180420: Delete Function : Its remove entire td with tr-->
<script type="text/javascript">
    function removeMe(that)
    {
        $(that).closest('tr').remove();
    }
</script>
<!-- RAVI20180420: Save Function : Its check input fields are empty or not if not empty then save e.i. hide save button and show edit and delete button. Change css:it should look like a plane space not as input field-->
<script type="text/javascript">
    function saveMe(that)
    {
        /*RAVI20180420: Count empty fields*/
        var emptyval = 0;
        $(that).closest('tr').find('td input[type=number]').each(function(i,v){
            if($(v).val()==''){
                emptyval++;
            }
        });
        /*RAVI20180420: Return false if there is any empty fields*/
        if (emptyval>0) {
            alert("Field should not be empty");
            return false;
        }
        /*RAVI20180420: changed input fields css, it should look like a plane space*/
        else{
            $(that).closest('tr').find('td input[type=number]').each(function(i,v){
                $(v).attr('Readonly',true).css({'border':'none','background-color':'white','box-shadow':'none'});
            });
            /*RAVI20180420: Show edit and delete button and hide save button*/
            $(that).siblings('.editbtn').show();
            $(that).siblings('.deletebtn').show();
            $(that).hide();
        }
        
    }
</script>

<!-- RAVI20180420: function for click on edit button, It should be a input field after click edit and hide edit an delete button and show save button -->
<script type="text/javascript">
    function editMe(that)
    {
        $(that).closest('tr').find('td input[type=number]').each(function(i,v){
            $(v).attr('Readonly',false).css({'border':'box','background-color':'#fff','box-shadow':'inset 0 1px 2px rgba(0,0,0,0.1)','border-color':'#ccc'});
        });
        $(that).siblings('.savebtn').show();
        $(that).siblings('.deletebtn').hide();
        $(that).hide();
    }
</script>