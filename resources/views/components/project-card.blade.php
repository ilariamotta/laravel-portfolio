<div class="project-card p-4 rounded-4 shadow-sm h-100">

    <h3 class="h4 fw-bold text-black-warm mb-3">
        {{ $project->name }}
    </h3>

    <figure class="mb-3">
        <blockquote class="blockquote mb-2">
            <p class="mb-0">{{ $project->customer }}</p>
        </blockquote>

        <figcaption class="blockquote-footer mb-0">
            <span>{{ $project->time }}</span>
        </figcaption>
    </figure>

    <p class="mt-3 mb-4">
        {{ $project->description }}
    </p>

    <a href="{{ route('admin.projects.show', $project) }}"
       class="btn btn-project-show">
        Apri progetto
    </a>

</div>