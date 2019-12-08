<table class="uk-table uk-table-striped">


    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Quantity</th>
             <th>Price</th>
            
               <th>Edit</th>
               <th>Delete</th>
        </tr>
    </thead>
    <tbody>
                  <?php $__currentLoopData = $cates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr id="table">
            <td><?php echo e($cate->id); ?></td>
            <td><?php echo e($cate->name); ?></td>
            <td><?php echo e($cate->quantity); ?></td>
            <td><?php echo e($cate->price); ?></td>
           
             <td><a href="product/edit/<?php echo e($cate->id); ?>" class="uk-button uk-button-primary">Edit</a></td>
             <td><a href="product/delete/<?php echo e($cate->id); ?>" class="uk-button uk-button-primary">Delete</a></td>
        </tr>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    </tbody>
</table>
