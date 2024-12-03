<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Job::create([
            'job_title' => 'Product Manager',
            'job_slug' => 'product-manager',
            'job_description' => 'Join our team as a Product Manager to lead the development and strategy of our products.',
            'job_department' => 'Management',
            'job_work_type' => 'Onsite',
            'job_total_positions' => 1,
            'job_requirements' => 'Experience in managing tech products, excellent communication, leadership skills, and knowledge of agile methodologies.',
            'job_status' => "Open"
        ]);
    
        Job::create([
            'job_title' => 'UX Researcher',
            'job_slug' => 'ux-researcher',
            'job_description' => 'We are looking for a talented UX Researcher to analyze and optimize user experience across our platforms.',
            'job_department' => 'Development',
            'job_work_type' => 'Remote',
            'job_total_positions' => 2,
            'job_requirements' => 'Experience in qualitative and quantitative research methodologies, wireframing, and prototyping.',
            'job_status' => "Closed"
        ]);
    
        Job::create([
            'job_title' => 'Data Analyst',
            'job_slug' => 'data-analyst',
            'job_description' => 'Data-driven analysts needed to help make informed business decisions.',
            'job_department' => 'Development',
            'job_work_type' => 'Onsite',
            'job_total_positions' => 4,
            'job_requirements' => 'Strong knowledge of SQL, Python, and experience with large datasets. Ability to present data-driven recommendations.',
            'job_status' => "Open"
        ]);
        Job::create([
            'job_title' => 'Construction Project Manager',
            'job_slug' => 'construction-project-manager',
            'job_description' => 'Seeking an experienced Project Manager to oversee large-scale construction projects from inception to completion.',
            'job_department' => 'Project Management',
            'job_work_type' => 'Onsite',
            'job_total_positions' => 2,
            'job_requirements' => 'Minimum 5 years of construction project management experience. PMP certification preferred. Strong budget management skills. Proficient in project management software. Excellent communication and leadership abilities',
            'job_status' => 'Open'
        ]);
        
        Job::create([
            'job_title' => 'Senior Structural Engineer',
            'job_slug' => 'senior-structural-engineer',
            'job_description' => 'We are looking for a highly skilled Structural Engineer to design and analyze complex building structures.',
            'job_department' => 'Engineering',
            'job_work_type' => 'Onsite',
            'job_total_positions' => 1,
            'job_requirements' => 'Professional Engineering (PE) license. Minimum 7 years of structural design experience. Proficiency in AutoCAD and structural analysis software. Experience in commercial and residential building design. Strong analytical and problem-solving skills',
            'job_status' => 'Open'
        ]);
        
        Job::create([
            'job_title' => 'Safety Compliance Officer',
            'job_slug' => 'safety-compliance-officer',
            'job_description' => 'Responsible for ensuring workplace safety and regulatory compliance across construction sites.',
            'job_department' => 'Safety',
            'job_work_type' => 'Onsite',
            'job_total_positions' => 3,
            'job_requirements' => 'OSHA certification required. Minimum 3 years of construction safety experience. Comprehensive knowledge of safety regulations. Strong attention to detail. Excellent written and verbal communication skills',
            'job_status' => 'Open'
        ]);
        
        Job::create([
            'job_title' => 'Heavy Equipment Operator',
            'job_slug' => 'heavy-equipment-operator',
            'job_description' => 'Skilled operators needed to handle various types of heavy machinery on construction sites.',
            'job_department' => 'Operations',
            'job_work_type' => 'Onsite',
            'job_total_positions' => 5,
            'job_requirements' => 'Valid heavy equipment operator certification. Minimum 2 years of operating experience. Proficient with excavators, bulldozers, and cranes. Clean driving record. Physical ability to work in demanding environments',
            'job_status' => 'Open'
        ]);
        
        Job::create([
            'job_title' => 'Construction Estimator',
            'job_slug' => 'construction-estimator',
            'job_description' => 'Experienced estimator to prepare accurate project cost estimates and proposals.',
            'job_department' => 'Finance',
            'job_work_type' => 'Hybrid',
            'job_total_positions' => 2,
            'job_requirements' => "Bachelor's degree in Construction Management or related field. Minimum 4 years of estimating experience. Proficient in cost estimation software. Strong mathematical and analytical skills. Excellent negotiation abilities",
            'job_status' => 'Open'
        ]);
        
        Job::create([
            'job_title' => 'Site Superintendent',
            'job_slug' => 'site-superintendent',
            'job_description' => 'Responsible for daily site operations and ensuring project quality and efficiency.',
            'job_department' => 'Operations',
            'job_work_type' => 'Onsite',
            'job_total_positions' => 2,
            'job_requirements' => 'Minimum 6 years of construction site management experience. In-depth knowledge of construction processes. Strong leadership and communication skills. Ability to read and interpret technical drawings. Excellent problem-solving capabilities',
            'job_status' => 'Open'
        ]);
        
        Job::create([
            'job_title' => 'Civil Engineer',
            'job_slug' => 'civil-engineer',
            'job_description' => 'Design and oversee infrastructure and construction projects.',
            'job_department' => 'Engineering',
            'job_work_type' => 'Onsite',
            'job_total_positions' => 2,
            'job_requirements' => 'Professional Engineering (PE) license. Minimum 4 years of civil engineering experience. Proficient in Civil 3D and other design software. Strong understanding of municipal infrastructure. Excellent technical writing skills',
            'job_status' => 'Open'
        ]);
        
        Job::create([
            'job_title' => 'Electrical Foreman',
            'job_slug' => 'electrical-foreman',
            'job_description' => 'Lead electrical installation teams on various construction projects.',
            'job_department' => 'Trades',
            'job_work_type' => 'Onsite',
            'job_total_positions' => 3,
            'job_requirements' => 'Master Electrician license. Minimum 5 years of electrical installation experience. Strong leadership and team management skills. Comprehensive knowledge of electrical codes. Ability to read and interpret electrical blueprints',
            'job_status' => 'Open'
        ]);
        
        Job::create([
            'job_title' => 'Materials Coordinator',
            'job_slug' => 'materials-coordinator',
            'job_description' => 'Manage procurement and logistics of construction materials.',
            'job_department' => 'Procurement',
            'job_work_type' => 'Hybrid',
            'job_total_positions' => 2,
            'job_requirements' => "Bachelor's degree in Supply Chain or related field. 2-3 years of materials management experience. Strong negotiation and vendor management skills. Proficient in inventory management software. Excellent organizational abilities",
            'job_status' => 'Open'
        ]);
        
        Job::create([
            'job_title' => 'BIM Specialist',
            'job_slug' => 'bim-specialist',
            'job_description' => 'Create and manage Building Information Modeling (BIM) for construction projects.',
            'job_department' => 'Design',
            'job_work_type' => 'Remote',
            'job_total_positions' => 1,
            'job_requirements' => 'Proficiency in Revit and BIM software. Minimum 3 years of BIM modeling experience. Strong understanding of architectural and engineering principles. Attention to detailed 3D modeling. Excellent technical communication skills',
            'job_status' => 'Open'
        ]);
        Job::create([
            'job_title' => 'Welding Specialist',
            'job_slug' => 'welding-specialist',
            'job_description' => 'Skilled welders needed for metal fabrication and structural work.',
            'job_department' => 'Trades',
            'job_work_type' => 'Onsite',
            'job_total_positions' => 2,
            'job_requirements' => 'AWS Welding Certification. Minimum 4 years of welding experience. Proficiency in MIG and TIG welding. Ability to read and interpret welding blueprints. Strong attention to safety protocols',
            'job_status' => 'Open'
        ]);
        
        Job::create([
            'job_title' => 'Concrete Specialist',
            'job_slug' => 'concrete-specialist',
            'job_description' => 'Expert in concrete mixing, pouring, and finishing for various construction projects.',
            'job_department' => 'Operations',
            'job_work_type' => 'Onsite',
            'job_total_positions' => 3,
            'job_requirements' => 'Minimum 5 years of concrete work experience. Knowledge of different concrete mixing techniques. Ability to operate concrete machinery. Strong understanding of structural requirements. Excellent physical stamina',
            'job_status' => 'Open'
        ]);
        
        Job::create([
            'job_title' => 'Environmental Compliance Manager',
            'job_slug' => 'environmental-compliance-manager',
            'job_description' => 'Oversee environmental regulations and sustainability practices in construction projects.',
            'job_department' => 'Compliance',
            'job_work_type' => 'Hybrid',
            'job_total_positions' => 1,
            'job_requirements' => ". Bachelor's degree in Environmental Science. Minimum 6 years of environmental compliance experience. In-depth knowledge of environmental regulations. Strong analytical and reporting skills. Excellent communication abilities",
            'job_status' => 'Open'
        ]);
        
        Job::create([
            'job_title' => 'Scaffolding Technician',
            'job_slug' => 'scaffolding-technician',
            'job_description' => 'Install and maintain scaffolding for construction and maintenance projects.',
            'job_department' => 'Operations',
            'job_work_type' => 'Onsite',
            'job_total_positions' => 2,
            'job_requirements' => 'Scaffolding safety certification. Minimum 3 years of scaffolding experience. Strong understanding of safety protocols. Ability to work at heights. Excellent teamwork skills',
            'job_status' => 'Open'
        ]);
        
        Job::create([
            'job_title' => 'Construction Scheduler',
            'job_slug' => 'construction-scheduler',
            'job_description' => 'Develop and manage project timelines and resource allocation.',
            'job_department' => 'Project Management',
            'job_work_type' => 'Hybrid',
            'job_total_positions' => 2,
            'job_requirements' => "Bachelor's degree in Construction Management. Proficiency in scheduling software (Primavera, MS Project). Minimum 4 years of construction scheduling experience. Strong organizational skills. Excellent problem-solving abilities",
            'job_status' => 'Open'
        ]);
        
        Job::create([
            'job_title' => 'Roofing Specialist',
            'job_slug' => 'roofing-specialist',
            'job_description' => 'Expert in roof installation, repair, and maintenance.',
            'job_department' => 'Trades',
            'job_work_type' => 'Onsite',
            'job_total_positions' => 3,
            'job_requirements' => 'Roofing certification. Minimum 5 years of roofing experience. Knowledge of various roofing materials. Strong safety awareness. Ability to work in challenging weather conditions',
            'job_status' => 'Open'
        ]);
        
        Job::create([
            'job_title' => 'Construction Accountant',
            'job_slug' => 'construction-accountant',
            'job_description' => 'Manage financial aspects of construction projects and company finances.',
            'job_department' => 'Finance',
            'job_work_type' => 'Hybrid',
            'job_total_positions' => 1,
            'job_requirements' => 'CPA certification. Minimum 5 years of construction accounting experience. Proficiency in accounting software. Strong understanding of construction financial principles. Excellent analytical skills',
            'job_status' => 'Open'
        ]);
        
        Job::create([
            'job_title' => 'Crane Operator',
            'job_slug' => 'crane-operator',
            'job_description' => 'Skilled crane operators for heavy lifting and material handling.',
            'job_department' => 'Operations',
            'job_work_type' => 'Onsite',
            'job_total_positions' => 2,
            'job_requirements' => 'Crane operator certification. Minimum 4 years of crane operation experience. Excellent spatial awareness. Strong communication skills. Ability to follow strict safety protocols',
            'job_status' => 'Open'
        ]);
        
        Job::create([
            'job_title' => 'Sustainable Design Consultant',
            'job_slug' => 'sustainable-design-consultant',
            'job_description' => 'Develop sustainable and eco-friendly design solutions for construction projects.',
            'job_department' => 'Design',
            'job_work_type' => 'Remote',
            'job_total_positions' => 1,
            'job_requirements' => 'LEED certification. Minimum 5 years of sustainable design experience. Strong knowledge of green building technologies. Excellent presentation and communication skills. Creative problem-solving abilities',
            'job_status' => 'Open'
        ]);
        
        Job::create([
            'job_title' => 'Drywall and Finishing Specialist',
            'job_slug' => 'drywall-finishing-specialist',
            'job_description' => 'Expert in drywall installation and finishing for interior construction.',
            'job_department' => 'Trades',
            'job_work_type' => 'Onsite',
            'job_total_positions' => 3,
            'job_requirements' => 'Minimum 4 years of drywall experience. Skilled in various finishing techniques. Attention to detail and quality. Ability to work efficiently. Strong teamwork skills',
            'job_status' => 'Open'
        ]);

        
        
    }
}
