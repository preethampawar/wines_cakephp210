<?php $this->start('reports_menu'); ?>
<?php echo $this->element('reports_menu'); ?>
<?php $this->end(); ?>

<h1>Income & Expenses Report</h1>
<?php echo $this->Form->create('Report', ['url' => '/reports/generateIncomeAndExpenseReport/', 'target' => '_blank', 'id' => 'IncomeExpensesReport']); ?>
<div id="paramsDiv">
	<div style="float:left; clear:none;">
		<?php
		$options = ['income' => 'Income', 'expense' => 'Expense'];
		echo $this->Form->input('payment_type', ['empty' => 'Income & Expenses', 'label' => 'Report Type', 'type' => 'select', 'options' => $options, 'escape' => false, 'onchange' => '$("#IncomeExpensesReport").removeAttr("target"); $("#IncomeExpensesReport").removeAttr("action"); $("#IncomeExpensesReport").submit();']);
		?>
	</div>
	<div style="float:left; clear:none;">
		<?php echo $this->Form->input('category_id', ['empty' => 'All', 'label' => 'Select Category', 'type' => 'select', 'options' => $categoriesList, 'escape' => false]); ?>
	</div>
	<div style="float:left; clear:none;">
		<?php
		$options = ['print' => 'Print View'];
		echo $this->Form->input('view_type', ['empty' => 'Normal View', 'label' => 'Select View', 'type' => 'select', 'options' => $options, 'escape' => false]);
		?>
	</div>
	<div style="float:left; clear:both;">
		<?php echo $this->Form->input('from_date', ['label' => 'From Date', 'required' => true, 'type' => 'date']); ?>
	</div>
	<div style="float:left; clear:none;">
		<?php echo $this->Form->input('to_date', ['label' => 'To Date', 'required' => true, 'type' => 'date']); ?>
	</div>
	<div style="clear:both;">

		<?php echo $this->Form->input('salary', ['label' => 'Include Salaries', 'type' => 'checkbox']); ?>
		<?php echo $this->Form->input('sales_purchases', ['label' => 'Include Sales & Purchases', 'type' => 'checkbox']); ?>
	</div>
	<div>
		<?php echo $this->Form->submit('Generate Report', ['id' => 'SubmitForm', 'title' => '', 'type' => 'submit', 'onclick' => 'return submitButtonMsg()']); ?>
	</div>
</div>
<?php
echo $this->Form->end();
?>
