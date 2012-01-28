-- APPOINTMENT
ALTER TABLE `appointment` CHANGE `appointment_id` `appointment_id` MEDIUMINT( 8 ) UNSIGNED NOT NULL AUTO_INCREMENT;
ALTER TABLE `appointment` ADD UNIQUE (
`employee_id` ,
`user_id` ,
`time_slot_id` ,
`procedure_id`
);
ALTER TABLE `beauty_parlour`.`appointment` DROP INDEX `employee_id` ,
ADD UNIQUE `unique_appointment` ( `employee_id` , `user_id` , `time_slot_id` , `procedure_id` );

-- EMPLOYEE
ALTER TABLE `employee` CHANGE `employee_id` `employee_id` TINYINT( 3 ) UNSIGNED NOT NULL AUTO_INCREMENT;
ALTER TABLE `employee` ADD UNIQUE (
`name` ,
`last_name` ,
`tel_number`
);
ALTER TABLE `beauty_parlour`.`employee` DROP INDEX `name` ,
ADD UNIQUE `unique_employee` ( `name` , `last_name` , `tel_number` );

-- PROCEDURE
ALTER TABLE `procedure` CHANGE `procedure_id` `procedure_id` TINYINT( 3 ) UNSIGNED NOT NULL AUTO_INCREMENT;
ALTER TABLE `procedure` ADD UNIQUE (
`name` ,
`length` ,
`employee_id`
);
ALTER TABLE `beauty_parlour`.`procedure` DROP INDEX `name` ,
ADD UNIQUE `unique_procedure` ( `name` , `length` , `employee_id` );

-- TIME_SLOT
ALTER TABLE `time_slot` CHANGE `time_slot_id` `time_slot_id` INT( 10 ) UNSIGNED NOT NULL AUTO_INCREMENT;
ALTER TABLE `time_slot` ADD `start` TIMESTAMP NOT NULL;
ALTER TABLE `time_slot` CHANGE `start` `start` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP;
ALTER TABLE `time_slot` ADD UNIQUE (
`length` ,
`employee_id` ,
`start`
);
ALTER TABLE `beauty_parlour`.`time_slot` DROP INDEX `length` ,
ADD UNIQUE `unique_time_slot` ( `length` , `employee_id` , `start` );
ALTER TABLE `procedure` ADD `start` TIMESTAMP NOT NULL;
ALTER TABLE `procedure` CHANGE `start` `start` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP;
ALTER TABLE `beauty_parlour`.`procedure` DROP INDEX `unique_procedure` ,
ADD UNIQUE `unique_procedure` ( `name` , `length` , `employee_id` , `start` );

-- USER
ALTER TABLE `user` CHANGE `user_id` `user_id` SMALLINT( 5 ) UNSIGNED NOT NULL AUTO_INCREMENT;
ALTER TABLE `user` ADD UNIQUE (
`email`
);