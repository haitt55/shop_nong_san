<?php

namespace App\Http\Controllers\Admin;

use App\Models\IntroducePolicy;
use Illuminate\Http\Request;
use App\Http\Requests\IntroducePolicyRequest;
use App\Http\Controllers\Admin\Controller;
use App\Storage\IntroducePolicyRepositoryInterface as IntroducePolicyRepository;
use App\Events\IntroducePolicy\WasCreated as IntroducePolicyWasCreated;
use App\Events\IntroducePolicy\WasUpdated as IntroducePolicyWasUpdated;
use App\Events\IntroducePolicy\WasDeleted as IntroducePolicyWasDeleted;
use App\Events\ExceptionOccurred;

class IntroducesPoliciesController extends Controller
{
    protected $introducePolicyRepository;

    public function __construct(IntroducePolicyRepository $introducePolicyRepository)
    {
        $this->introducePolicyRepository = $introducePolicyRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $introduces_policies = $this->introducePolicyRepository->all();

        return view('admin.introduces_policies.index', compact('introduces_policies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.introduces_policies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IntroducePolicyRequest $request)
    {
        $introduce_policy = $this->introducePolicyRepository->create($request->all());

        event(new IntroducePolicyWasCreated($introduce_policy));

        return redirect()->route('admin.introduces_policies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        $category = $this->categoryRepository->findOrFail($id);
//
//        return view('admin.categories.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $introduce_policy = $this->introducePolicyRepository->findOrFail($id);

        return view('admin.introduces_policies.edit', compact('introduce_policy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(IntroducePolicyRequest $request, $id)
    {
        $introduce_policy = $this->introducePolicyRepository->update($id, $request->all());

        event(new IntroducePolicyWasUpdated($introduce_policy));

        return redirect()->route('admin.introduces_policies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $this->introducePolicyRepository->delete($id);
        } catch (Exception $ex) {
            event(new ExceptionOccurred($ex));

            return response()->json([
                'error' => [
                    'message' => $ex->getMessage(),
                ]
            ]);
        }

        event(new IntroducePolicyWasDeleted());

        return response()->json();
    }
}