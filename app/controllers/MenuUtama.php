<?php

class MenuUtama extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function get_all()
	{
		$data = Menu::All();
		foreach ($data as $datas) {
			$datass [] = [
				'image_Slider'=> $datas->slider,
				'id_katalog'=> $datas->id_katalog,
				'news'=> $datas->news,
				'banner'=> $datas->banner
			];
		}

		$status = true;
		$status_code = 200;
		$prod = 'Data ditemukan';
		$devel = 'Data ditemukan';

		return Response::json(array('status'=>$status,
									'status_code'=>$status_code,
									'message'=>array('prod'=>$prod,
											 'devel'=>$devel),
									'data'=>$datass
									));
	}

}
