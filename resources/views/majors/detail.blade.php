<x-default-layout title="Majors" section_title="Major Detail">
  <div class="grid grid-cols-3">
    <div class="flex flex-col gap-4 px-6 py-4 bg-white border border-t-4 
    border-zinc-300 shadow col-span-3 md:col-span-2">
      <div class="grid sm:grid-cols-2 gap-4">
        <div class="flex flex-col gap-2">
          <div>Name</div>
          <div class="px-3 py-2 border border-zinc-300">Major Name Here</div>
        </div>
        <div class="flex flex-col gap-2">
          <div>Major ID Number</div>
          <div class="px-3 py-2 border border-zinc-300">F55122000</div>
        </div>
      </div>

      <div class="grid sm:grid-cols-2 gap-4">
        <div class="flex flex-col gap-2">
          <div>Email</div>
          <div class="px-3 py-2 border border-zinc-300">Major@example.com</div>
        </div>
        <div class="flex flex-col gap-2">
          <div>Phone Number</div>
          <div class="px-3 py-2 border border-zinc-300">+62-853-4820-3913</div>
        </div>
      </div>

      <div class="flex flex-col gap-2">
        <div>Birth Date</div>
        <div class="px-3 py-2 border border-zinc-300">28 September 2003</div>
      </div>

      <div class="flex flex-col gap-2">
        <div>Gender</div>
        <div class="px-3 py-2 border border-zinc-300">Male</div>
      </div>

      <div class="flex flex-col gap-2">
        <div>Majors</div>
        <div class="px-3 py-2 border border-zinc-300">S1 Informatics</div>
      </div>

      <div class="flex flex-col gap-2">
        <div>Status</div>
        <div class="px-3 py-2 border border-zinc-300">Active</div>
      </div>

      <div class="self-end flex gap-2 mt-4">
        <a href="{{ route('Majors.index') }}"
           class="bg-slate-50 border border-slate-500 text-slate-500 px-3 py-2 
           cursor-pointer">
          <span>Back</span>
        </a>
        <a href="{{ route('Majors.update', 1) }}"
           class="bg-yellow-50 border border-yellow-500 text-yellow-500 px-3 py-2 
           flex items-center gap-2 cursor-pointer">
          <i class="ph ph-note-pencil block text-yellow-500"></i>
          <span>Edit</span>
        </a>
      </div>
    </div>
  </div>
</x-default-layout>
