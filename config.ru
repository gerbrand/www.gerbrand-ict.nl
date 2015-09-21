use Rack::Static,
  :urls => ["/images", "/javascripts", "/stylesheets"],
  :root => "public",
  :index => "index.html",
  :header_rules => [[:all, {'Cache-Control' => 'public, max-age=7200'}]]

run lambda { |env|
  [
    404,
    headers,
    ['This url is not or not anymore valid.']
  ]
}
