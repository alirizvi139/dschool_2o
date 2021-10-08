

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('public/backEnd/')); ?>/css/croppie.css">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>
<section class="sms-breadcrumb up_breadcrumb mb-40 white-box">
    <div class="container-fluid">
        <div class="row justify-content-between">
            <h1><?php echo app('translator')->get('lang.profile'); ?> <?php echo app('translator')->get('lang.update'); ?> </h1>
            <div class="bc-pages">
                <a href="<?php echo e(route('dashboard')); ?>"><?php echo app('translator')->get('lang.dashboard'); ?></a>
                <a href="<?php echo e(route('student_list')); ?>"><?php echo app('translator')->get('lang.student_list'); ?></a>
                <a href="#"><?php echo app('translator')->get('lang.profile'); ?> <?php echo app('translator')->get('lang.update'); ?> </a>
            </div>
        </div>
    </div>
</section>

<section class="admin-visitor-area up_st_admin_visitor">
    <div class="container-fluid p-0">
        <div class="row mb-30">
            <div class="col-lg-6">
                <div class="main-title">
                    <h3><?php echo app('translator')->get('lang.profile'); ?> <?php echo app('translator')->get('lang.update'); ?> </h3>
                </div>
            </div>
        </div>
        <?php echo e(Form::open(['class' => 'form-horizontal', 'files' => true, 'route' => 'my-children-update',
                        'method' => 'POST', 'enctype' => 'multipart/form-data', 'id' => 'student_form'])); ?>

        <div class="row">
            <div class="col-lg-12"> 
                <div class="white-box">
                    <div class="">
                        <div class="row mb-4">
                            <div class="col-lg-12 text-center">

                                <?php if($errors->any()): ?>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($error == "The email address has already been taken."): ?>
                                        <div class="error text-danger "><?php echo e('The email address has already been taken, You can find out in student list or disabled student list'); ?></div>
                                    <?php endif; ?> 
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>

                                <?php if($errors->any()): ?>
                                     <div class="error text-danger "><?php echo e('Something went wrong, please try again'); ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="col-lg-12">
                                <div class="main-title">
                                    <h4 class="stu-sub-head"><?php echo app('translator')->get('lang.personal'); ?> <?php echo app('translator')->get('lang.info'); ?></h4>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" name="url" id="url" value="<?php echo e(URL::to('/')); ?>"> 
                        <input type="hidden" name="id" id="id" value="<?php echo e($student->id); ?>"> 

                        <!-- <input type="hidden" name="parent_id" id="parent_id" value="<?php echo e($student->parent_id); ?>">  -->
 
                        <div class="row mb-20">
                            <div class="col-lg-3">
                                <div class="input-effect">
                                    <input class="primary-input form-control<?php echo e($errors->has('first_name') ? ' is-invalid' : ''); ?>" type="text" name="first_name" value="<?php echo e($student->first_name); ?>">
                                    <label><?php echo app('translator')->get('lang.first'); ?> <?php echo app('translator')->get('lang.name'); ?> <span>*</span></label>
                                    <span class="focus-border"></span>
                                    <?php if($errors->has('first_name')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('first_name')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="input-effect">
                                    <input class="primary-input form-control<?php echo e($errors->has('last_name') ? ' is-invalid' : ''); ?>" type="text" name="last_name" value="<?php echo e($student->last_name); ?>">
                                    <label><?php echo app('translator')->get('lang.last'); ?> <?php echo app('translator')->get('lang.name'); ?></label>
                                    <span class="focus-border"></span>
                                    <?php if($errors->has('last_name')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('last_name')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="input-effect">
                                    <select class="niceSelect w-100 bb form-control<?php echo e($errors->has('gender') ? ' is-invalid' : ''); ?>" name="gender">
                                        <option data-display="<?php echo app('translator')->get('lang.gender'); ?> *" value=""><?php echo app('translator')->get('lang.gender'); ?> *</option>
                                        <?php $__currentLoopData = $genders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gender): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if(isset($student->gender_id)): ?>
                                                <option value="<?php echo e($gender->id); ?>" <?php echo e($student->gender_id == $gender->id? 'selected': ''); ?>><?php echo e($gender->base_setup_name); ?></option>
                                            <?php else: ?>
                                                <option value="<?php echo e($gender->id); ?>"><?php echo e($gender->base_setup_name); ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </select>
                                    <span class="focus-border"></span>
                                    <?php if($errors->has('gender')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('gender')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="no-gutters input-right-icon">
                                    <div class="col">
                                        <div class="input-effect">
                                            <input class="primary-input date form-control<?php echo e($errors->has('date_of_birth') ? ' is-invalid' : ''); ?>" id="startDate" type="text" name="date_of_birth" value="<?php echo e(date('m/d/Y', strtotime($student->date_of_birth))); ?>" autocomplete="off">
                                            <span class="focus-border"></span>
                                            <label><?php echo app('translator')->get('lang.date_of_birth'); ?> <span>*</span></label>
                                            <?php if($errors->has('date_of_birth')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('date_of_birth')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <button class="" type="button">
                                            <i class="ti-calendar" id="start-date-icon"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row mb-20">
                             <div class="col-lg-2">
                                <div class="input-effect">
                                    <select class="niceSelect w-100 bb form-control<?php echo e($errors->has('blood_group') ? ' is-invalid' : ''); ?>" name="blood_group">
                                        <option data-display="<?php echo app('translator')->get('lang.blood_group'); ?>" value=""><?php echo app('translator')->get('lang.blood_group'); ?></option>
                                        <?php $__currentLoopData = $blood_groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blood_group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if(isset($student->bloodgroup_id)): ?>
                                            <option value="<?php echo e($blood_group->id); ?>" <?php echo e($blood_group->id == $student->bloodgroup_id? 'selected': ''); ?>><?php echo e($blood_group->base_setup_name); ?></option>
                                        <?php else: ?>
                                            <option value="<?php echo e($blood_group->id); ?>"><?php echo e($blood_group->base_setup_name); ?></option>
                                        <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <span class="focus-border"></span>
                                    <?php if($errors->has('blood_group')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('blood_group')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="input-effect">
                                    <select class="niceSelect w-100 bb form-control<?php echo e($errors->has('religion') ? ' is-invalid' : ''); ?>" name="religion">
                                        <option data-display="<?php echo app('translator')->get('lang.religion'); ?>" value=""><?php echo app('translator')->get('lang.religion'); ?></option>
                                        <?php $__currentLoopData = $religions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $religion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($religion->id); ?>" <?php echo e($student->religion_id != ""? ($student->religion_id == $religion->id? 'selected':''):''); ?>><?php echo e($religion->base_setup_name); ?></option>
                                        }
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </select>
                                    <span class="focus-border"></span>
                                    <?php if($errors->has('religion')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('religion')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            
                            <div class="col-lg-2">
                                <div class="input-effect">
                                    <input class="primary-input" type="text" name="caste" value="<?php echo e($student->caste); ?>">
                                    <label><?php echo app('translator')->get('lang.caste'); ?></label>
                                    <span class="focus-border"></span>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="input-effect">
                                    <input class="primary-input form-control<?php echo e($errors->has('email_address') ? ' is-invalid' : ''); ?>" type="text" name="email_address" value="<?php echo e($student->email); ?>">
                                    <label><?php echo app('translator')->get('lang.email'); ?> <?php echo app('translator')->get('lang.address'); ?> <span></span></label>
                                    <span class="focus-border"></span>
                                    <?php if($errors->has('email_address')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email_address')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="input-effect">
                                    <input class="primary-input form-control<?php echo e($errors->has('phone_number') ? ' is-invalid' : ''); ?>" type="text" name="phone_number" value="<?php echo e($student->mobile); ?>">
                                    <label><?php echo app('translator')->get('lang.phone'); ?> <?php echo app('translator')->get('lang.number'); ?></label>
                                    <span class="focus-border"></span>
                                    <?php if($errors->has('phone_number')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('phone_number')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>


                        <div class="row mb-20">
                            <div class="col-lg-2">
                                <div class="no-gutters input-right-icon">
                                    <div class="col">
                                        <div class="input-effect">
                                            <input class="primary-input date" id="endDate" type="text" name="admission_date" value="<?php echo e($student->admission_date != ""? date('m/d/Y', strtotime($student->admission_date)): date('m/d/Y')); ?>" autocomplete="off">
                                                <label><?php echo app('translator')->get('lang.admission'); ?> <?php echo app('translator')->get('lang.date'); ?></label>
                                            <span class="focus-border"></span>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <button class="" type="button">
                                            <i class="ti-calendar" id="end-date-icon"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                           
                            <div class="col-lg-4">
                                <div class="input-effect">
                                    <div class="input-effect">
                                    <select class="niceSelect w-100 bb form-control<?php echo e($errors->has('student_category_id') ? ' is-invalid' : ''); ?>" name="student_category_id">
                                        <option data-display="<?php echo app('translator')->get('lang.category'); ?>" value=""><?php echo app('translator')->get('lang.category'); ?></option>
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if(isset($student->student_category_id)): ?>
                                        <option value="<?php echo e($category->id); ?>" <?php echo e($student->student_category_id == $category->id? 'selected': ''); ?>><?php echo e($category->category_name); ?></option>
                                        <?php else: ?>
                                        <option value="<?php echo e($category->id); ?>"><?php echo e($category->category_name); ?></option>
                                        <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </select>
                                    <span class="focus-border"></span>
                                    <?php if($errors->has('student_category_id')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('student_category_id')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="input-effect">
                                    <div class="input-effect">
                                    <select class="niceSelect w-100 bb form-control<?php echo e($errors->has('student_group_id') ? ' is-invalid' : ''); ?>" name="student_group_id">
                                        <option data-display="<?php echo app('translator')->get('lang.group'); ?>" value=""><?php echo app('translator')->get('lang.group'); ?></option>
                                        <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if(isset($student->student_group_id)): ?>
                                        <option value="<?php echo e($group->id); ?>" <?php echo e($student->student_group_id == $group->id? 'selected': ''); ?>><?php echo e($group->group); ?></option>
                                        <?php else: ?>
                                        <option value="<?php echo e($group->id); ?>"><?php echo e($group->group); ?></option>
                                        <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </select>
                                    <span class="focus-border"></span>
                                    <?php if($errors->has('student_group_id')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('student_group_id')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="input-effect">
                                    <input class="primary-input" type="text" name="height" value="<?php echo e($student->height); ?>">
                                    <label><?php echo app('translator')->get('lang.height'); ?> (<?php echo app('translator')->get('lang.in'); ?>) <span></span> </label>
                                    <span class="focus-border"></span>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="input-effect">
                                    <input class="primary-input" type="text" name="weight" value="<?php echo e($student->weight); ?>">
                                    <label><?php echo app('translator')->get('lang.Weight'); ?> (<?php echo app('translator')->get('lang.kg'); ?>) <span></span> </label>
                                    <span class="focus-border"></span>
                                </div>
                            </div>

                        </div>

                        <div class="row mb-20">
                            
                            <div class="col-lg-3">
                                <div class="row no-gutters input-right-icon">
                                    <div class="col">
                                        <div class="input-effect">
                                            <input class="primary-input" type="text" id="placeholderPhoto" placeholder="<?php echo e($student->student_photo != ""? getFilePath3($student->student_photo):'Student Photo'); ?>"
                                                disabled>
                                            <span class="focus-border"></span>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <button class="primary-btn-small-input" type="button">
                                            <label class="primary-btn small fix-gr-bg" for="photo"><?php echo app('translator')->get('lang.browse'); ?></label>
                                            <input type="file" class="d-none" name="photo" id="photo">
                                        </button>
                                    </div>
                                </div>
                            </div>
                             
                        </div>  
 



                        <div class="parent_details" id="parent_details">
                            <div class="row mb-4">
                                <div class="col-lg-12">
                                    <div class="main-title">
                                        <h4 class="stu-sub-head"><?php echo app('translator')->get('lang.parents_and_guardian_info'); ?></h4>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row mb-20">
                                <div class="col-lg-3">
                                    <div class="input-effect">
                                        <input class="primary-input form-control<?php echo e($errors->has('fathers_name') ? ' is-invalid' : ''); ?>" type="text" name="fathers_name" id="fathers_name" value="<?php echo e($student->parents->fathers_name); ?>">
                                        <label><?php echo app('translator')->get('lang.father_name'); ?> <span></span></label>
                                        <span class="focus-border"></span>
                                        <?php if($errors->has('fathers_name')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('fathers_name')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="input-effect">
                                        <input class="primary-input form-control" type="text" placeholder="" name="fathers_occupation" id="fathers_occupation" value="<?php echo e($student->parents->fathers_occupation); ?>">
                                        <label><?php echo app('translator')->get('lang.occupation'); ?></label>
                                        <span class="focus-border"></span>
                                    </div>
                                </div>
                                 <div class="col-lg-3">
                                    <div class="input-effect">
                                        <input class="primary-input form-control<?php echo e($errors->has('fathers_phone') ? ' is-invalid' : ''); ?>" type="text" name="fathers_phone" id="fathers_phone"  value="<?php echo e($student->parents->fathers_mobile); ?>">
                                        <label><?php echo app('translator')->get('lang.father_phone'); ?> <span>*</span></label>
                                        <span class="focus-border"></span>
                                        <?php if($errors->has('fathers_phone')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('fathers_phone')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="row no-gutters input-right-icon">
                                        <div class="col">
                                            <div class="input-effect">
                                                <input class="primary-input" type="text" id="placeholderFathersName" placeholder="<?php echo e(isset($student->parents->fathers_photo) && $student->parents->fathers_photo != ""? getFilePath3($student->parents->fathers_photo):'Photo'); ?>"
                                                    disabled>
                                                <span class="focus-border"></span>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <button class="primary-btn-small-input" type="button">
                                                <label class="primary-btn small fix-gr-bg" for="fathers_photo"><?php echo app('translator')->get('lang.browse'); ?></label>
                                                <input type="file" class="d-none" name="fathers_photo" id="fathers_photo">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-20">
                                <div class="col-lg-3">
                                    <div class="input-effect">
                                        <input class="primary-input form-control<?php echo e($errors->has('mothers_name') ? ' is-invalid' : ''); ?>" type="text" name="mothers_name" id="mothers_name"   value="<?php echo e($student->parents->mothers_name); ?>">
                                        <label><?php echo app('translator')->get('lang.mother_name'); ?> <span></span></label>
                                        <span class="focus-border"></span>
                                        <?php if($errors->has('mothers_name')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('mothers_name')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="input-effect">
                                        <input class="primary-input" type="text" name="mothers_occupation" id="mothers_occupation" value="<?php echo e($student->parents->mothers_occupation); ?>">
                                        <label><?php echo app('translator')->get('lang.occupation'); ?></label>
                                        <span class="focus-border"></span>
                                    </div>
                                </div>
                                 <div class="col-lg-3">
                                    <div class="input-effect">
                                        <input class="primary-input form-control<?php echo e($errors->has('mothers_phone') ? ' is-invalid' : ''); ?>" type="text" name="mothers_phone" id="mothers_phone" value="<?php echo e($student->parents->mothers_mobile); ?>">
                                        <label><?php echo app('translator')->get('lang.mother_phone'); ?> <span></span></label>
                                        <span class="focus-border"></span>
                                        <?php if($errors->has('mothers_phone')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('mothers_phone')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="row no-gutters input-right-icon">
                                        <div class="col">
                                            <div class="input-effect">
                                                <input class="primary-input" type="text" id="placeholderMothersName" placeholder="<?php echo e(isset($student->parents->mothers_photo) && $student->parents->mothers_photo != ""? getFilePath3($student->parents->mothers_photo):'Photo'); ?>"
                                                    disabled>
                                                <span class="focus-border"></span>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <button class="primary-btn-small-input" type="button">
                                                <label class="primary-btn small fix-gr-bg" for="mothers_photo"><?php echo app('translator')->get('lang.browse'); ?></label>
                                                <input type="file" class="d-none" name="mothers_photo" id="mothers_photo">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                             <div class="row mb-40">
                                <div class="col-lg-12 d-flex">
                                    <p class="text-uppercase fw-500 mb-10"><?php echo app('translator')->get('lang.relation_with_guardian'); ?> *</p>
                                    <div class="d-flex radio-btn-flex ml-40">
                                        <div class="mr-30">
                                            <input type="radio" name="relationButton" id="relationFather" value="F" class="common-radio relationButton" <?php echo e($student->parents->relation == "F"? 'checked':''); ?>>
                                            <label for="relationFather"><?php echo app('translator')->get('lang.father'); ?></label>
                                        </div>
                                        <div class="mr-30">
                                            <input type="radio" name="relationButton" id="relationMother" value="M" class="common-radio relationButton" <?php echo e($student->parents->relation == "M"? 'checked':''); ?>>
                                            <label for="relationMother"><?php echo app('translator')->get('lang.mother'); ?></label>
                                        </div>
                                        <div>
                                            <input type="radio" name="relationButton" id="relationOther" value="O" class="common-radio relationButton" <?php echo e($student->parents->relation == "O"? 'checked':''); ?>>
                                            <label for="relationOther"><?php echo app('translator')->get('lang.Other'); ?></label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        
                            <div class="row mb-20">
                                <div class="col-lg-3">
                                    <div class="input-effect">
                                        <input class="primary-input form-control<?php echo e($errors->has('guardians_name') ? ' is-invalid' : ''); ?>" type="text" name="guardians_name" id="guardians_name" value="<?php echo e($student->parents->guardians_name); ?>">
                                        <label><?php echo app('translator')->get('lang.guardian_name'); ?>  <span></span> </label>
                                        <span class="focus-border"></span>
                                        <?php if($errors->has('guardians_name')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('guardians_name')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <?php
                                    if($student->parents->guardians_relation=='F'){
                                            $show_relation="Father";
                                    }
                                    if($student->parents->guardians_relation=='M'){
                                            $relashow_relationtion="Mother";
                                    }
                                    if($student->parents->guardians_relation=='O'){
                                            $show_relation="Other";
                                    }
                                ?>
                                
                                <div class="col-lg-3">
                                    <div class="input-effect">
                                        <input class="primary-input read-only-input" type="text" placeholder="Relation" name="relation" id="relation" value="<?php echo e($student->parents !=""?@$student->parents->guardians_relation:""); ?>" readonly>
                                        <label><?php echo app('translator')->get('lang.relation_with_guardian'); ?> </label>
                                        <span class="focus-border"></span>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="input-effect">
                                        <input class="primary-input form-control<?php echo e($errors->has('guardians_email') ? ' is-invalid' : ''); ?>" type="text" name="guardians_email" id="guardians_email" value="<?php echo e($student->parents->guardians_email); ?>">
                                        <label><?php echo app('translator')->get('lang.guardian_email'); ?> <span>*</span></label>
                                        <span class="focus-border"></span>
                                        <?php if($errors->has('guardians_email')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('guardians_email')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="row no-gutters input-right-icon">
                                        <div class="col">
                                            <div class="input-effect">
                                                <input class="primary-input" type="text" id="placeholderGuardiansName" placeholder="<?php echo e(isset($student->parents->guardians_photo) && $student->parents->guardians_photo != ""? getFilePath3($student->parents->guardians_photo):'Photo'); ?>"
                                                    disabled>
                                                <span class="focus-border"></span>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <button class="primary-btn-small-input" type="button">
                                                <label class="primary-btn small fix-gr-bg" for="guardians_photo"><?php echo app('translator')->get('lang.browse'); ?></label>
                                                <input type="file" class="d-none" name="guardians_photo" id="guardians_photo">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-20">
                                <div class="col-lg-3">
                                    <div class="input-effect">
                                        <input class="primary-input form-control<?php echo e($errors->has('guardians_phone') ? ' is-invalid' : ''); ?>" type="text" name="guardians_phone" id="guardians_phone" value="<?php echo e($student->parents->guardians_mobile); ?>">
                                        <label><?php echo app('translator')->get('lang.guardian_phone'); ?> <span>*</span></label>
                                        <span class="focus-border"></span>
                                        <?php if($errors->has('guardians_phone')): ?>
                                        <span class="invalid-feedback" role="alert">
                                            <strong><?php echo e($errors->first('guardians_phone')); ?></strong>
                                        </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="input-effect">
                                        <input class="primary-input" type="text" name="guardians_occupation" id="guardians_occupation" value="<?php echo e($student->parents->guardians_occupation); ?>">
                                        <label><?php echo app('translator')->get('lang.guardian_occupation'); ?></label>
                                        <span class="focus-border"></span>
                                    </div>
                                </div>
                            </div>
                             <div class="row mt-35">
                                <div class="col-lg-6">
                                    <div class="input-effect">
                                        <textarea class="primary-input form-control" cols="0" rows="4" name="guardians_address" id="guardians_address"><?php echo e($student->parents->guardians_address); ?></textarea>
                                        <label><?php echo app('translator')->get('lang.guardian_address'); ?> <span></span> </label>
                                        <span class="focus-border textarea"></span>
                                       <?php if($errors->has('guardians_address')): ?>
                                        <span class="danger text-danger">
                                            <strong><?php echo e($errors->first('guardians_address')); ?></strong>
                                        </span>
                                        <?php endif; ?> 
                                    </div>
                                </div>
                            </div>
                        </div>





                       <div class="row mt-40">
                            <div class="col-lg-12">
                                <div class="main-title">
                                    <h4 class="stu-sub-head"><?php echo app('translator')->get('lang.student_address_info'); ?></h4>
                                </div>
                            </div>
                        </div>


                        <div class="row mb-30 mt-30">
                            <div class="col-lg-6">

                                <div class="input-effect mt-20">
                                    <textarea class="primary-input form-control<?php echo e($errors->has('current_address') ? ' is-invalid' : ''); ?>" cols="0" rows="3" name="current_address" id="current_address"><?php echo e($student->current_address); ?></textarea>
                                    <label><?php echo app('translator')->get('lang.current_address'); ?> <span></span> </label>
                                    <span class="focus-border textarea"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">

                                <div class="input-effect mt-20">
                                    <textarea class="primary-input form-control<?php echo e($errors->has('current_address') ? ' is-invalid' : ''); ?>" cols="0" rows="3" name="permanent_address" id="permanent_address"><?php echo e($student->permanent_address); ?></textarea>
                                    <label><?php echo app('translator')->get('lang.permanent_address'); ?> <span></span> </label>
                                    <span class="focus-border textarea"></span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mt-40 mb-4">
                            <div class="col-lg-12">
                                <div class="main-title">
                                    <h4 class="stu-sub-head"><?php echo app('translator')->get('lang.Other'); ?> <?php echo app('translator')->get('lang.info'); ?></h4>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mb-20">
                            <div class="col-lg-3">
                                <div class="input-effect">
                                    <input class="primary-input form-control<?php echo e($errors->has('national_id_number') ? ' is-invalid' : ''); ?>" type="text" name="national_id_number" value="<?php echo e($student->national_id_no); ?>">
                                    <label><?php echo app('translator')->get('lang.national_iD_number'); ?> <span></span></label>
                                    <span class="focus-border"></span>
                                    <?php if($errors->has('national_id_number')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('national_id_number')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="input-effect">
                                    <input class="primary-input form-control" type="text" name="local_id_number" value="<?php echo e($student->local_id_no); ?>">
                                    <label><?php echo app('translator')->get('lang.local_Id_Number'); ?> <span></span> </label>
                                    <span class="focus-border"></span>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="input-effect">
                                    <input class="primary-input form-control" type="text" name="bank_account_number" value="<?php echo e($student->bank_account_no); ?>">
                                    <label><?php echo app('translator')->get('lang.bank_account'); ?> <?php echo app('translator')->get('lang.number'); ?> <span></span> </label>
                                    <span class="focus-border"></span>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="input-effect">
                                    <input class="primary-input form-control" type="text" name="bank_name" value="<?php echo e($student->bank_name); ?>">
                                     <label><?php echo app('translator')->get('lang.bank_name'); ?> <span></span> </label>
                                    <span class="focus-border"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-20 mt-40">
                            <div class="col-lg-6">
                                <div class="input-effect">
                                    <textarea class="primary-input form-control" cols="0" rows="4" name="previous_school_details"><?php echo e($student->previous_school_details); ?></textarea>
                                    <label><?php echo app('translator')->get('lang.previous_school_details'); ?></label>
                                    <span class="focus-border textarea"></span>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="input-effect">
                                    <textarea class="primary-input form-control" cols="0" rows="4" name="additional_notes"><?php echo e($student->aditional_notes); ?></textarea>
                                     <label><?php echo app('translator')->get('lang.additional_notes'); ?></label>
                                    <span class="focus-border textarea"></span>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="input-effect mt-50">
                                    <input class="primary-input form-control" type="text" name="ifsc_code" value="<?php echo e(old('ifsc_code')); ?><?php echo e($student->ifsc_code); ?>">
                                    <label><?php echo app('translator')->get('lang.IFSC_Code'); ?></label>
                                    <span class="focus-border"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-40 mb-4">
                            <div class="col-lg-12">
                                <div class="main-title">
                                    <h4 class="stu-sub-head"><?php echo app('translator')->get('lang.document_info'); ?></h4>
                                </div>
                            </div>
                        </div>
                        
                         <div class="row mb-20">
                            <div class="col-lg-3">
                                <div class="input-effect">
                                    <input class="primary-input" type="text" name="document_title_1" value="<?php echo e($student->document_title_1); ?>">
                                    <label><?php echo app('translator')->get('lang.document_01_title'); ?></label>
                                    <span class="focus-border"></span>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="input-effect">
                                    <input class="primary-input" type="text" name="document_title_2" value="<?php echo e($student->document_title_2); ?>">
                                    <label><?php echo app('translator')->get('lang.document_02_title'); ?></label>
                                    <span class="focus-border"></span>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="input-effect">
                                    <input class="primary-input" type="text" name="document_title_3" value="<?php echo e($student->document_title_3); ?>">
                                    <label><?php echo app('translator')->get('lang.document_03_title'); ?></label>
                                    <span class="focus-border"></span>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="input-effect">
                                    <input class="primary-input" type="text" name="document_title_4" value="<?php echo e($student->document_title_4); ?>">
                                    <label><?php echo app('translator')->get('lang.document_04_title'); ?></label>
                                    <span class="focus-border"></span>
                                </div>
                            </div>
                        </div>
                         <div class="row mb-20">
                             <div class="col-lg-3">
                                <div class="row no-gutters input-right-icon">
                                    <div class="col">
                                        <div class="input-effect">
                                            <input class="primary-input" type="text" id="placeholderFileOneName" placeholder="<?php echo e($student->document_file_1 != ""? showDocument($student->document_file_1):'01'); ?>"
                                                disabled>
                                            <span class="focus-border"></span>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <button class="primary-btn-small-input" type="button">
                                            <label class="primary-btn small fix-gr-bg" for="document_file_1"><?php echo app('translator')->get('lang.browse'); ?></label>
                                            <input type="file" class="d-none" name="document_file_1" id="document_file_1">
                                        </button>
                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-3">
                                <div class="row no-gutters input-right-icon">
                                    <div class="col">
                                        <div class="input-effect">
                                            <input class="primary-input" type="text" id="placeholderFileTwoName" placeholder="<?php echo e(isset($student->document_file_2) && $student->document_file_2 != ""? showDocument($student->document_file_2):'02'); ?>"
                                                disabled>
                                            <span class="focus-border"></span>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <button class="primary-btn-small-input" type="button">
                                            <label class="primary-btn small fix-gr-bg" for="document_file_2"><?php echo app('translator')->get('lang.browse'); ?></label>
                                            <input type="file" class="d-none" name="document_file_2" id="document_file_2">
                                        </button>
                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-3">
                                <div class="row no-gutters input-right-icon">
                                    <div class="col">
                                        <div class="input-effect">
                                            <input class="primary-input" type="text" id="placeholderFileThreeName" placeholder="<?php echo e(isset($student->document_file_3) && $student->document_file_3 != ""? showDocument($student->document_file_3):'03'); ?>"
                                                disabled>
                                            <span class="focus-border"></span>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <button class="primary-btn-small-input" type="button">
                                            <label class="primary-btn small fix-gr-bg" for="document_file_3"><?php echo app('translator')->get('lang.browse'); ?></label>
                                            <input type="file" class="d-none" name="document_file_3" id="document_file_3">
                                        </button>
                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-3">
                                <div class="row no-gutters input-right-icon">
                                    <div class="col">
                                        <div class="input-effect">
                                            <input class="primary-input" type="text" id="placeholderFileFourName" placeholder="<?php echo e(isset($student->document_file_4) && $student->document_file_4 != ""? showDocument($student->document_file_4):'04'); ?>"
                                                disabled>
                                            <span class="focus-border"></span>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <button class="primary-btn-small-input" type="button">
                                            <label class="primary-btn small fix-gr-bg" for="document_file_4"><?php echo app('translator')->get('lang.browse'); ?></label>
                                            <input type="file" class="d-none" name="document_file_4" id="document_file_4">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        <div class="row mt-5">
                            <div class="col-lg-12 text-center">
                                <button class="primary-btn fix-gr-bg">
                                    <span class="ti-check"></span>
                                    <?php echo app('translator')->get('lang.update_student'); ?>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php echo e(Form::close()); ?>

    </div>
</section>


<div class="modal fade admin-query" id="removeSiblingModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><?php echo app('translator')->get('lang.remove'); ?></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <div class="text-center">
                        <h4><?php echo app('translator')->get('lang.are_you'); ?></h4>
                    </div>

                    <div class="mt-40 d-flex justify-content-between">
                        <button type="button" class="primary-btn tr-bg" data-dismiss="modal"><?php echo app('translator')->get('lang.cancel'); ?></button>
                        <button type="button" class="primary-btn fix-gr-bg" data-dismiss="modal" id="yesRemoveSibling"><?php echo app('translator')->get('lang.delete'); ?></button>
                        
                    </div>
                </div>

            </div>
        </div>
    </div>


 
 <input type="text" id="STurl" value="<?php echo e(route('student_update_pic',$student->id)); ?>" hidden>
 <div class="modal" id="LogoPic">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Crop Image And Upload</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div id="resize"></div>
                <button class="btn rotate float-lef" data-deg="90" > 
                <i class="ti-back-right"></i></button>
                <button class="btn rotate float-right" data-deg="-90" > 
                <i class="ti-back-left"></i></button>
                <hr>                
                <a href="javascript:;" class="primary-btn fix-gr-bg pull-right" id="upload_logo">Crop</a>
            </div>
        </div>
    </div>
</div>


 

 <div class="modal" id="FatherPic">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Crop Image And Upload</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div id="fa_resize"></div>
                <button class="btn rotate float-lef" data-deg="90" > 
                <i class="ti-back-right"></i></button>
                <button class="btn rotate float-right" data-deg="-90" > 
                <i class="ti-back-left"></i></button>
                <hr>                
                <a href="javascript:;" class="primary-btn fix-gr-bg pull-right" id="FatherPic_logo">Crop</a>
            </div>
        </div>
    </div>
</div>

 

 <div class="modal" id="MotherPic">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Crop Image And Upload</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div id="ma_resize"></div>
                <button class="btn rotate float-lef" data-deg="90" > 
                <i class="ti-back-right"></i></button>
                <button class="btn rotate float-right" data-deg="-90" > 
                <i class="ti-back-left"></i></button>
                <hr>                
                <a href="javascript:;" class="primary-btn fix-gr-bg pull-right" id="Mother_logo">Crop</a>
            </div>
        </div>
    </div>
</div>

 

 <div class="modal" id="GurdianPic">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Crop Image And Upload</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <div id="Gu_resize"></div>
                <button class="btn rotate float-lef" data-deg="90" > 
                <i class="ti-back-right"></i></button>
                <button class="btn rotate float-right" data-deg="-90" > 
                <i class="ti-back-left"></i></button>
                <hr>
                
                <a href="javascript:;" class="primary-btn fix-gr-bg pull-right" id="Gurdian_logo">Crop</a>
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('public/backEnd/')); ?>/js/croppie.js"></script>
<script src="<?php echo e(asset('public/backEnd/')); ?>/js/st_addmision.js"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backEnd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Celestialcode\infixEduV6.3.1\resources\views/backEnd/parentPanel/update_my_children.blade.php ENDPATH**/ ?>