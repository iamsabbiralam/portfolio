<?php

namespace App\Http\Controllers;

use App\Models\RecentWork;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreRecentWorkRequest;
use App\Http\Requests\UpdateRecentWorkRequest;

class RecentWorkController extends Controller
{
    public function index()
    {
        $data['title'] = __("Recent Work");
        $data['recentWorks'] = RecentWork::orderByDESC('created_at')->paginate();

        return view('backoffice.recent-works.index', $data);
    }

    public function create()
    {
        $data['title'] = __("Create Recent Work");

        return view("backoffice.recent-works.create", $data);
    }

    public function store(StoreRecentWorkRequest $request)
    {
        $storeDate = [
            'title' => $request->get('title'),
            'types' => $request->get('types'),
            'description' => $request->get('description'),
            'duration' => $request->get('duration'),
            'completion_date' => $request->get('completion_date'),
        ];

        if ($request->hasFile('thumbnail')) {
            $fileName = $request->get('title');
            $thumbnailName = $fileName . '.' . $request->file('thumbnail')->getClientOriginalExtension();
            $storeDate['thumbnail'] = Storage::putFileAs(
                'images/portfolio/thumbnail',
                $request->file('thumbnail'),
                $thumbnailName
            );
        }
        if ($request->hasFile('cover_image')) {
            $fileName = $request->get('title');
            $coverImageName = $fileName . '.' . $request->file('cover_image')->getClientOriginalExtension();
            $storeDate['cover_image'] = Storage::putFileAs(
                'images/portfolio/cover-image',
                $request->file('cover_image'),
                $coverImageName
            );
        }
        if ($request->hasFile('sub_image')) {
            $fileName = $request->get('title');
            $subImageName = $fileName . '.' . $request->file('sub_image')->getClientOriginalExtension();
            $storeDate['sub_image'] = Storage::putFileAs(
                'images/portfolio/sub-image',
                $request->file('sub_image'),
                $subImageName
            );
        }

        if (RecentWork::create($storeDate)) {
            return redirect()
                ->route('recent-works.index')
                ->with('SUCCESS', 'Recent Work created successfully.');
        }

        return redirect()->back()->with('ERROR', 'Something went wrong.');
    }

    public function show(RecentWork $recentWork)
    {
        $data['title'] = __("Edit Recent Work");
        $data['recentWork'] = $recentWork;

        return view('backoffice.recent-works.show', $data);
    }

    public function edit(RecentWork $recentWork)
    {
        $data['title'] = __("Edit Recent Work");
        $data['recentWork'] = $recentWork;

        return view('backoffice.recent-works.edit', $data);
    }

    public function update(UpdateRecentWorkRequest $request, RecentWork $recentWork)
    {
        $updateDate = [
            'title' => $request->get('title'),
            'types' => $request->get('types'),
            'description' => $request->get('description'),
            'duration' => $request->get('duration'),
            'completion_date' => $request->get('completion_date'),
        ];

        if ($request->hasFile('thumbnail')) {
            if ($recentWork->thumbnail) {
                Storage::delete($recentWork->thumbnail);
            }

            $fileName = $request->get('title');
            $thumbnailName = $fileName . '.' . $request->file('thumbnail')->getClientOriginalExtension();
            $updateDate['thumbnail'] = Storage::putFileAs(
                'images/portfolio/thumbnail',
                $request->file('thumbnail'),
                $thumbnailName
            );
        }

        if ($request->hasFile('cover_image')) {
            if ($recentWork->cover_image) {
                Storage::delete($recentWork->cover_image);
            }

            $fileName = $request->get('title');
            $coverImageName = $fileName . '.' . $request->file('cover_image')->getClientOriginalExtension();
            $updateDate['cover_image'] = Storage::putFileAs(
                'images/portfolio/cover-image',
                $request->file('cover_image'),
                $coverImageName
            );
        }

        if ($request->hasFile('sub_image')) {
            if ($recentWork->sub_image) {
                Storage::delete($recentWork->sub_image);
            }

            $fileName = $request->get('title');
            $subImageName = $fileName . '.' . $request->file('sub_image')->getClientOriginalExtension();
            $updateDate['sub_image'] = Storage::putFileAs(
                'images/portfolio/sub-image',
                $request->file('sub_image'),
                $subImageName
            );
        }

        if ($recentWork->update($updateDate)) {
            return redirect()
                ->route('recent-works.index')
                ->with('SUCCESS', 'Recent Work updated successfully.');
        }

        return redirect()->back()->with('ERROR', 'Something went wrong.');
    }

    public function destroy(RecentWork $recentWork)
    {
        if ($recentWork->thumbnail) {
            Storage::delete($recentWork->thumbnail);
        }

        if ($recentWork->cover_image) {
            Storage::delete($recentWork->cover_image);
        }

        if ($recentWork->sub_image) {
            Storage::delete($recentWork->sub_image);
        }

        if ($recentWork->delete()) {
            return redirect()
                ->route('recent-works.index')
                ->with('SUCCESS', 'Recent Work deleted successfully.');
        }

        return redirect()->back()->with('ERROR', 'Something went wrong.');
    }
}
