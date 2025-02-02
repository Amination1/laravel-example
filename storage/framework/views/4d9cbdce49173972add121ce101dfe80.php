<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('heading', null, []); ?> 
        Home Page🏡
     <?php $__env->endSlot(); ?>

    <div class="min-h-screen bg-gradient-to-r from-blue-50 to-purple-50 flex flex-col items-center justify-center p-6">
        <!-- Header -->
        <header class="text-center mb-8">
            <h1 class="text-5xl font-bold text-gray-900 mb-4">Welcome to Our Project 🏠</h1>
            <p class="text-xl text-gray-600">A simple and clean Laravel project with Tailwind CSS</p>
        </header>

        <!-- Main Content -->
        <main class="text-center">
            <div class="bg-white p-8 rounded-lg shadow-lg max-w-2xl">
                <h2 class="text-3xl font-semibold text-gray-800 mb-4">Get Started</h2>
                <p class="text-gray-600 mb-6">
                    This is a test project built with Laravel and Tailwind CSS. It's designed to help you quickly start
                    your next project with a clean and modern design.
                </p>
                <a href="/jobs" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition duration-300">
                    Explore Jobs
                </a>
            </div>
        </main>

        <!-- Footer -->
        <footer class="mt-8 text-center text-gray-500">
            <p>&copy; 2025 Amination. All rights reserved.</p>
        </footer>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php /**PATH /home/amin/Desktop/Code/laravel-example/resources/views/home.blade.php ENDPATH**/ ?>