<x-default-layout title="Major" section_title="Edit Major data">
  <div class="grid grid-cols-3">
    <form action="" method="POST"
      class="flex flex-col gap-4 px-6 py-4 bg-white border border-zinc-300 shadow col-span-3 md:col-span-2">
      @csrf
      @method("PUT")

      <div class="grid sm:grid-cols-2 gap-4">
        <div class="flex flex-col gap-2">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" class="px-3 py-2 border border-zinc-300 bg-slate-50"
            placeholder="Major Name">
        </div>

        <div class="flex flex-col gap-2">
          <label for="Major_id_number">Major ID Number</label>
          <input type="text" id="Major_id_number" name="Major_id_number"
            class="px-3 py-2 border border-zinc-300 bg-slate-50"
            placeholder="Major ID (e.g., F55122001)">
        </div>
      </div>

      <div class="grid sm:grid-cols-2 gap-4">
        <div class="flex flex-col gap-2">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" class="px-3 py-2 border border-zinc-300 bg-slate-50"
            placeholder="Major@example.com">
        </div>

        <div class="flex flex-col gap-2">
          <label for="phone_number">Phone Number</label>
          <input type="text" id="phone_number" name="phone_number"
            class="px-3 py-2 border border-zinc-300 bg-slate-50"
            placeholder="Phone number (e.g., 081234567891)">
        </div>
      </div>

      <div class="flex flex-col gap-2">
        <label for="birth_date">Birth Date</label>
        <input type="date" id="birth_date" name="birth_date"
          class="px-3 py-2 border border-zinc-300 bg-slate-50">
      </div>

      <div class="flex flex-col gap-2">
        <label for="gender">Gender</label>
        <select name="gender" id="gender"
          class="px-3 py-2 border border-zinc-300 appearance-none bg-slate-50">
          <option value="" disabled selected>Select Gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
      </div>

      <div class="flex flex-col gap-2">
        <label for="majors">Majors</label>
        <select name="majors" id="majors"
          class="px-3 py-2 border border-zinc-300 appearance-none bg-slate-50">
          <option value="" disabled selected>Select Majors</option>
          {{-- majors data render here --}}
          <option value="1">S1 Teknik Informatika</option>
          <option value="2">S1 Sistem Informasi</option>
        </select>
      </div>

      <div class="flex flex-col gap-2">
        <label for="status">Status</label>
        <select name="status" id="status"
          class="px-3 py-2 border border-zinc-300 appearance-none bg-slate-50">
          <option value="" disabled selected>Select Major Status</option>
          <option value="active">Active</option>
          <option value="on leave">On Leave</option>
          <option value="graduated">Graduated</option>
          <option value="dropped out">Dropped Out</option>
        </select>
      </div>

      <div class="self-end flex gap-2 pt-4">
        <a href="{{ route('Majors.index') }}"
          class="bg-slate-50 border border-slate-500 text-slate-500 px-3 py-2 cursor-pointer">
          <span>Cancel</span>
        </a>
        <button type="submit"
          class="bg-blue-50 border border-blue-500 text-blue-500 px-3 py-2 flex items-center gap-2 cursor-pointer">
          <i class="ph ph-floppy-disk block text-blue-500"></i>
          <span>Update</span>
        </button>
      </div>
    </form>
  </div>
</x-default-layout>
