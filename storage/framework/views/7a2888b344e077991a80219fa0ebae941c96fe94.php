<?php
    $isInput ??= true;
    $level ??= 0;
?>
<?php $__currentLoopData = $fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($name === '[]'): ?>
        <?php
            $description = "The request body is an array (<code>{$field['type']}</code>`)";
            $description .= !empty($field['description']) ? ", representing ".lcfirst($field['description'])."." : '.';
            if(count($field['__fields'])) $description .= " Each item has the following properties:";
        ?>
        <?php echo Parsedown::instance()->text($description); ?>


        <?php $__currentLoopData = $field['__fields']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subfieldName => $subfield): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(!empty($subfield['__fields'])): ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'scribe::components.nested-fields','data' => ['fields' => [$subfieldName => $subfield],'endpointId' => $endpointId,'isInput' => $isInput,'level' => $level + 2]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('scribe::nested-fields'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['fields' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([$subfieldName => $subfield]),'endpointId' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($endpointId),'isInput' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isInput),'level' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($level + 2)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <?php else: ?>
                    <div style="margin-left: <?php echo e(($level + 2) * 14); ?>px; clear: unset;">
                        <?php $__env->startComponent('scribe::components.field-details', [
                          'name' => $subfieldName,
                          'fullName' => $subfield['name'],
                          'type' => $subfield['type'] ?? 'string',
                          'required' => $subfield['required'] ?? false,
                          'description' => $subfield['description'] ?? '',
                          'example' => $subfield['example'] ?? '',
                          'enumValues' => $subfield['enumValues'] ?? null,
                          'endpointId' => $endpointId,
                          'hasChildren' => false,
                          'component' => 'body',
                          'isInput' => $isInput,
                        ]); ?>
                        <?php echo $__env->renderComponent(); ?>
                    </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php elseif(!empty($field['__fields'])): ?>
        <div style="<?php if($level): ?> margin-left: <?php echo e($level * 14); ?>px;<?php else: ?> padding-left: 28px; <?php endif; ?> clear: unset;">
        <details>
            <summary style="padding-bottom: 10px;">
                <?php $__env->startComponent('scribe::components.field-details', [
                  'name' => $name,
                  'fullName' => $field['name'],
                  'type' => $field['type'] ?? 'string',
                  'required' => $field['required'] ?? false,
                  'description' => $field['description'] ?? '',
                  'example' => $field['example'] ?? '',
                  'endpointId' => $endpointId,
                  'hasChildren' => true,
                  'component' => 'body',
                  'isInput' => $isInput,
                ]); ?>
                <?php echo $__env->renderComponent(); ?>
            </summary>
            <?php $__currentLoopData = $field['__fields']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subfieldName => $subfield): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(!empty($subfield['__fields'])): ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'scribe::components.nested-fields','data' => ['fields' => [$subfieldName => $subfield],'endpointId' => $endpointId,'isInput' => $isInput,'level' => $level + 1]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('scribe::nested-fields'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['fields' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([$subfieldName => $subfield]),'endpointId' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($endpointId),'isInput' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isInput),'level' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($level + 1)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                <?php else: ?>
                    <div style="margin-left: <?php echo e(($level + 1) * 14); ?>px; clear: unset;">
                        <?php $__env->startComponent('scribe::components.field-details', [
                          'name' => $subfieldName,
                          'fullName' => $subfield['name'],
                          'type' => $subfield['type'] ?? 'string',
                          'required' => $subfield['required'] ?? false,
                          'description' => $subfield['description'] ?? '',
                          'example' => $subfield['example'] ?? '',
                          'enumValues' => $field['enumValues'] ?? null,
                          'endpointId' => $endpointId,
                          'hasChildren' => false,
                          'component' => 'body',
                          'isInput' => $isInput,
                        ]); ?>
                        <?php echo $__env->renderComponent(); ?>
                    </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </details>
        </div>
    <?php else: ?>
        <div style="<?php if($level): ?> margin-left: <?php echo e(($level + 1) * 14); ?>px;<?php else: ?> padding-left: 28px; <?php endif; ?> clear: unset;">
            <?php $__env->startComponent('scribe::components.field-details', [
              'name' => $name,
              'fullName' => $field['name'],
              'type' => $field['type'] ?? 'string',
              'required' => $field['required'] ?? false,
              'description' => $field['description'] ?? '',
              'example' => $field['example'] ?? '',
              'enumValues' => $field['enumValues'] ?? null,
              'endpointId' => $endpointId,
              'hasChildren' => false,
              'component' => 'body',
              'isInput' => $isInput,
            ]); ?>
            <?php echo $__env->renderComponent(); ?>
        </div>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\xampp\htdocs\tantak\vendor\knuckleswtf\scribe\src/../resources/views//components/nested-fields.blade.php ENDPATH**/ ?>