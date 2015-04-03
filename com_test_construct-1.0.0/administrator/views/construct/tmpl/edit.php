<?php
/**
 * @version     1.0.0
 * @package     com_test_construct
 * @copyright   © 2015. Все права защищены.
 * @license     GNU General Public License версии 2 или более поздней; Смотрите LICENSE.txt
 * @author      mrsiter <padlo@ex.ua> - http://mrsiter.com
 */
// no direct access
defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers/html');
JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');
JHtml::_('formbehavior.chosen', 'select');
JHtml::_('behavior.keepalive');

// Import CSS
$document = JFactory::getDocument();
$document->addStyleSheet('components/com_test_construct/assets/css/test_construct.css');
?>
<script type="text/javascript">
    js = jQuery.noConflict();
    js(document).ready(function() {
        
	js('input:hidden.question').each(function(){
		var name = js(this).attr('name');
		if(name.indexOf('questionhidden')){
			js('#jform_question option[value="'+js(this).val()+'"]').attr('selected',true);
		}
	});
	js("#jform_question").trigger("liszt:updated");
    });

    Joomla.submitbutton = function(task)
    {
        if (task == 'construct.cancel') {
            Joomla.submitform(task, document.getElementById('construct-form'));
        }
        else {
            
            if (task != 'construct.cancel' && document.formvalidator.isValid(document.id('construct-form'))) {
                
	if(js('#jform_question option:selected').length == 0){
		js("#jform_question option[value=0]").attr('selected','selected');
	}
                Joomla.submitform(task, document.getElementById('construct-form'));
            }
            else {
                alert('<?php echo $this->escape(JText::_('JGLOBAL_VALIDATION_FORM_FAILED')); ?>');
            }
        }
    }
</script>

<form action="<?php echo JRoute::_('index.php?option=com_test_construct&layout=edit&id=' . (int) $this->item->id); ?>" method="post" enctype="multipart/form-data" name="adminForm" id="construct-form" class="form-validate">

    <div class="form-horizontal">
        <?php echo JHtml::_('bootstrap.startTabSet', 'myTab', array('active' => 'general')); ?>

        <?php echo JHtml::_('bootstrap.addTab', 'myTab', 'general', JText::_('COM_TEST_CONSTRUCT_TITLE_CONSTRUCT', true)); ?>
        <div class="row-fluid">
            <div class="span10 form-horizontal">
                <fieldset class="adminform">

                    				<input type="hidden" name="jform[id]" value="<?php echo $this->item->id; ?>" />
			<div class="control-group">
				<div class="control-label"><?php echo $this->form->getLabel('key'); ?></div>
				<div class="controls"><?php echo $this->form->getInput('key'); ?></div>
			</div>
			<div class="control-group">
				<div class="control-label"><?php echo $this->form->getLabel('question'); ?></div>
				<div class="controls"><?php echo $this->form->getInput('question'); ?></div>
			</div>

			<?php
				foreach((array)$this->item->question as $value): 
					if(!is_array($value)):
						echo '<input type="hidden" class="question" name="jform[questionhidden]['.$value.']" value="'.$value.'" />';
					endif;
				endforeach;
			?>			<div class="control-group">
				<div class="control-label"><?php echo $this->form->getLabel('type_answer'); ?></div>
				<div class="controls"><?php echo $this->form->getInput('type_answer'); ?></div>
			</div>
			<div class="control-group">
				<div class="control-label"><?php echo $this->form->getLabel('time_for_test'); ?></div>
				<div class="controls"><?php echo $this->form->getInput('time_for_test'); ?></div>
			</div>
			<div class="control-group">
				<div class="control-label"><?php echo $this->form->getLabel('test_for_user'); ?></div>
				<div class="controls"><?php echo $this->form->getInput('test_for_user'); ?></div>
			</div>


                </fieldset>
            </div>
        </div>
        <?php echo JHtml::_('bootstrap.endTab'); ?>
        
        

        <?php echo JHtml::_('bootstrap.endTabSet'); ?>

        <input type="hidden" name="task" value="" />
        <?php echo JHtml::_('form.token'); ?>

    </div>
</form>