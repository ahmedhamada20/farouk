<?php

namespace Tests\Feature;

use App\Models\Course;
use App\Models\SettingSite;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class CoursrsTest extends TestCase
{

    use RefreshDatabase;

    public function userLogin_permissions()
    {
        $users = User::factory()->create();
        $information = SettingSite::factory()->create();
        $permissions = [
            //course
            'show-course',
            'create-course',
            'edit-course',
            'deleted-course',
            'list-course',
        ];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        $role = Role::create(['name' => 'Admin']);

        $permissions = Permission::pluck('id', 'id')->all();

        $role->syncPermissions($permissions);

        $users->assignRole([$role->id]);

        $this->actingAs($users);
    }

    public function test_view_courses_index()
    {
        $this->userLogin_permissions();
        $this->get(route('course.index'))->assertStatus(200);
    }

    public function test_create_new_courses()
    {
        $this->userLogin_permissions();
        $this->get(route('course.create'))->assertStatus(200);
    }

    public function test_store_new_courses()
    {
        $this->userLogin_permissions();

        $this->post('course', [
            "name" => ['ar' => 'الاسم', 'en' => 'name'],
            "notes" => ['ar' => 'الوصف', 'en' => 'name'],
            "url" => "test",
            "status" => 1,
            "price" => "6500.00",
        ]);

        $this->assertDatabaseHas('courses', [
            "url" => "test",
            "status" => 1,
            "price" => "6500.00",
        ]);
    }

    public function test_edit_courses()
    {
        $this->userLogin_permissions();

        $course = Course::factory()->create();

        $this->put(route('course.update', $course->id))->assertStatus(404);
    }


}
