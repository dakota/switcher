<h1>Preview switcher layout</h1>
<ul>
	<li><?php echo $this->Html->link(__('Return to switcher paths'), array('admin' => true, 'action' => 'index')); ?> </li>
</ul>
<dl>
	<dt><?php echo __('Path'); ?></dt>
	<dd>
		<?php echo h($switcherPath['SwitcherPath']['path']); ?>
		&nbsp;
	</dd>
	<dt><?php echo __('Layout'); ?></dt>
	<dd>
		<?php echo h($switcherPath['SwitcherPath']['layout']); ?>
		&nbsp;
	</dd>
	<dt><?php echo __('Theme'); ?></dt>
	<dd>
		<?php echo h($switcherPath['SwitcherPath']['theme']); ?>
		&nbsp;
	</dd>
</dl>
